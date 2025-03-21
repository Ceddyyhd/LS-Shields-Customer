<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        <a href="{{ route('any', 'home') }}" class="logo-dark">
            <img src="/images/logo-sm.png" class="logo-sm" alt="logo sm"/>
            <img src="/images/logo-dark.png" class="logo-lg" alt="logo dark"/>
        </a>

        <a href="{{ route('any', 'home') }}" class="logo-light">
            <img src="/images/logo-sm.png" class="logo-sm" alt="logo sm"/>
            <img src="/images/logo-light.png" class="logo-lg" alt="logo light"/>
        </a>
    </div>

    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
        <iconify-icon icon="iconamoon:arrow-left-4-square-duotone" class="button-sm-hover-icon"></iconify-icon>
    </button>

    <div class="scrollbar" data-simplebar>
    <ul class="navbar-nav" id="navbar-nav">
        <li class="menu-title">Menü</li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('customer.dashboard') }}">
                <span class="nav-icon">
                    <iconify-icon icon="iconamoon:home-duotone"></iconify-icon>
                </span>
                <span class="nav-text">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('customer.invoices') }}">
                <span class="nav-icon">
                    <iconify-icon icon="iconamoon:document-duotone"></iconify-icon>
                </span>
                <span class="nav-text">Rechnungen</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('customer.anfragen') }}">
                <span class="nav-icon">
                    <iconify-icon icon="iconamoon:message-duotone"></iconify-icon>
                </span>
                <span class="nav-text">Anfragen</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('customer.eventplanung') }}">
                <span class="nav-icon">
                    <iconify-icon icon="iconamoon:calendar-duotone"></iconify-icon>
                </span>
                <span class="nav-text">Eventplanung</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('customer.feedback') }}">
                <span class="nav-icon">
                    <iconify-icon icon="iconamoon:star-duotone"></iconify-icon>
                </span>
                <span class="nav-text">Feedback</span>
            </a>
        </li>

        <li class="menu-title">Bug Report & Changelog</li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="nav-icon"><iconify-icon icon="mdi:bug"></iconify-icon></span>
                    Bug Reports
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="nav-icon"><iconify-icon icon="mdi:history"></iconify-icon></span>
                    <span class="nav-text">Changelog</span>
                </a>
            </li>

        <li class="menu-title">Einstellungen</li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('customer.profile') }}">
                <span class="nav-icon">
                    <iconify-icon icon="iconamoon:profile-duotone"></iconify-icon>
                </span>
                <span class="nav-text">Profil Bild</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('customer.settings') }}">
                <span class="nav-icon">
                    <iconify-icon icon="iconamoon:settings-duotone"></iconify-icon>
                </span>
                <span class="nav-text">Einstellungen</span>
            </a>
        </li>
    </ul>
</div>
</div>
