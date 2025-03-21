@extends('layouts.vertical', ['title' => 'Dashboard', 'subTitle' => 'Profil Bild Settings'])

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
<style>
.avatar-container {
    max-width: 300px;
    margin: 20px auto;
}
#preview {
    width: 100%;
    height: 300px;
    object-fit: cover;
}
#cropContainer {
    max-height: 80vh; /* Increase to 80% of viewport height */
}
#cropImage {
    max-width: 100%;
    max-height: 70vh; /* Adjust image height */
}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profilbild ändern</div>

                <div class="card-body">
                    <form id="avatarForm" method="POST" action="{{ route('customer.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="avatar-container">
                            <img id="preview" 
                                src="{{ auth()->user()->avatar 
                                    ? Storage::url(auth()->user()->avatar) 
                                    : Storage::url('images/default-avatar.png') }}" 
                                class="img-fluid mb-3">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Neues Profilbild</label>
                            <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
                            <input type="hidden" id="cropped_data" name="cropped_data">
                        </div>

                        <button type="submit" class="btn btn-primary">Speichern</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cropping Modal -->
<div class="modal fade" id="cropModal" tabindex="-1">
    <div class="modal-dialog modal-xl"> <!-- Changed from modal-lg to modal-xl -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Bild zuschneiden</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div id="cropContainer">
                    <img id="cropImage" src="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                <button type="button" class="btn btn-primary" id="cropButton">Zuschneiden</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
// Global toastr options
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
let cropper;

// Listen for file input changes
document.getElementById('avatar').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const cropModal = new bootstrap.Modal(document.getElementById('cropModal'));
            cropModal.show();
            
            const image = document.getElementById('cropImage');
            image.src = e.target.result;
            
            // Initialize cropper after modal is shown
            document.getElementById('cropModal').addEventListener('shown.bs.modal', function () {
                if (cropper) {
                    cropper.destroy();
                }
                
                cropper = new Cropper(image, {
                    aspectRatio: 1,
                    viewMode: 2,
                    dragMode: 'move',
                    autoCropArea: 1,
                    restore: false
                });
            }, { once: true });
        }
        reader.readAsDataURL(file);
    }
});

// Handle crop button click
document.getElementById('cropButton').addEventListener('click', function() {
    if (!cropper) return;
    
    const canvas = cropper.getCroppedCanvas({
        width: 300,
        height: 300
    });
    
    document.getElementById('preview').src = canvas.toDataURL();
    document.getElementById('cropped_data').value = canvas.toDataURL();
    
    const cropModal = bootstrap.Modal.getInstance(document.getElementById('cropModal'));
    cropModal.hide();
});

// Form submission handling with AJAX
$('#avatarForm').on('submit', function(e) {
    e.preventDefault();
    
    if (!$('#cropped_data').val()) {
        toastr.error('Bitte wählen Sie ein Bild aus und schneiden Sie es zu.');
        return;
    }
    
    $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: $(this).serialize(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'X-HTTP-Method-Override': 'PUT'
        },
        success: function(response) {
            toastr.success('Profilbild wurde erfolgreich aktualisiert');
            // Reload page after 1 second
            setTimeout(function() {
                window.location.reload();
            }, 1000);
        },
        error: function(xhr) {
            toastr.error('Fehler beim Speichern des Bildes');
            console.error(xhr.responseText);
        }
    });
});
</script>
@endsection