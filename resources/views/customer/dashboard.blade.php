@extends('layouts.vertical', ['title' => 'Dashboard', 'subTitle' => 'Dashboard'])

@section('content')
<div class="container-fluid">
    <!-- Announcements Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Ankündigungen</h3>
                </div>
                <div class="card-body-ankuendigung">
                    <!-- Announcements will be loaded here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $.ajax({
        url: '{{ route("customer.dashboard.announcements") }}',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            if (data && data.length > 0) {
                const cardBody = $('.card-body-ankuendigung');
                cardBody.empty();

                // Filter for all and customer announcements only
                const filteredAnnouncements = data.filter(announcement => 
                    announcement.visibility === 'all' || announcement.visibility === 'customer'
                );

                filteredAnnouncements.forEach(function(announcement) {
                    let alertClass = '';
                    switch (announcement.priority) {
                        case 'high': alertClass = 'alert-danger'; break;
                        case 'mid': alertClass = 'alert-warning'; break;
                        case 'low': alertClass = 'alert-success'; break;
                        default: alertClass = 'alert-info';
                    }

                    cardBody.append(`
                        <div class="alert ${alertClass} mb-3">
                            <h5 class="alert-heading">${announcement.title}</h5>
                            <p class="mb-0">${announcement.description || announcement.message}</p>
                            <small class="text-muted">
                                Erstellt am: ${new Date(announcement.created_at).toLocaleDateString()}
                            </small>
                        </div>
                    `);
                });
            } else {
                $('.card-body-ankuendigung').html(
                    '<div class="alert alert-info">Keine Ankündigungen verfügbar.</div>'
                );
            }
        },
        error: function(xhr, status, error) {
            console.error('Ajax error:', error); // Add debug logging
            $('.card-body-ankuendigung').html(
                '<div class="alert alert-danger">Fehler beim Laden der Ankündigungen.</div>'
            );
        }
    });
});
</script>
@endsection