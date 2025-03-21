<header class="header_section">
    <div class="header_top">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

        <div class="container-fluid">
            <div class="contact_link-container">
                <a href="" class="contact_link1">
                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    <span>Labour Place - 6004 Los Santos </span>
                </a>
                <a href="" class="contact_link2">
                    <i class="fas fa-phone" aria-hidden="true"></i>
                    <span>Call : 6004</span>
                </a>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span>LS-Shields</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""></span>
                </button>
                <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/about') }}">Über uns</a>
                        </li>
                        <li class="nav-item {{ Request::is('service') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/service') }}">Services</a>
                        </li>
                        <li class="nav-item {{ Request::is('teams') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/teams') }}">Unser Team</a>
                        </li>
                        <li class="nav-item {{ Request::is('partner') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/partner') }}">Partner</a>
                        </li>
                        <li class="nav-item {{ Request::is('galerie') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/galerie') }}">Galerie</a>
                        </li>
                        <li class="nav-item {{ Request::is('bewerbung') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/bewerbung') }}">Bewerbung</a>
                        </li>
                    </ul>
                    <div class="auth-buttons ml-auto">
                        @auth
                            <a href="{{ route('customer.dashboard') }}" class="btn btn-light">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-light me-2">Login</a>
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
@endpush