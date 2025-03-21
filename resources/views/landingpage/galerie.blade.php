@extends('landingpage.layouts.app')

@section('content')
<section class="gallery_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Unsere Galerie</h2>
            <p>Eindrücke aus unserem Arbeitsalltag</p>
        </div>

        <div class="row gallery-grid">
    @foreach($images as $image)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="gallery-item">
                <img src="https://intern.ls-shields.eu/gallery/{{ $image->image_path }}" 
                     alt="{{ $image->title }}" 
                     class="img-fluid"
                     data-toggle="modal"
                     data-target="#imageModal{{ $image->id }}">
                @if($image->title)
                    <div class="gallery-caption">
                        <h5>{{ $image->title }}</h5>
                        <p>{{ $image->description }}</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="imageModal{{ $image->id }}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="https://intern.ls-shields.eu/gallery/{{ $image->image_path }}" 
                             alt="{{ $image->title }}" 
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
    </div>
</section>

<style>
.gallery-grid {
    margin-top: 30px;
}

.modal-backdrop {
    z-index: 99998 !important;
}

.modal {
    z-index: 99999 !important;
}

.modal-dialog {
    max-width: 800px;
    margin: 30px auto;
    position: relative;
    z-index: 100000 !important;
}

.modal-content {
    background-color: transparent;
    border: none;
}

.modal-body {
    padding: 0;
    position: relative;
}

.modal-body img {
    width: 100%;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0,0,0,0.5);
}

.modal-close {
    position: absolute;
    top: -30px;
    right: -30px;
    color: white;
    font-size: 24px;
    cursor: pointer;
    z-index: 100001 !important;
}
</style>
@endsection