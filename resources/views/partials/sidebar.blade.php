<div class="main-nav">
    <div class="logo-box">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/images/logo.png') }}" class="logo-lg" alt="Logo">
        </a>
    </div>

    <ul class="navbar-nav" id="navbar-nav">
        <li class="menu-title">General</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <span class="nav-icon"><iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon></span>
                <span class="nav-text">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link menu-arrow" href="#sidebarCases" data-bs-toggle="collapse">
                <span class="nav-icon"><iconify-icon icon="solar:document-bold-duotone"></iconify-icon></span>
                <span class="nav-text">Cases</span>
            </a>
            <div class="collapse" id="sidebarCases">
                <ul class="nav sub-navbar-nav">
                    <li class="sub-nav-item"><a class="sub-nav-link" href="">All Cases</a></li>
                    <li class="sub-nav-item"><a class="sub-nav-link" href="">New Case</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
