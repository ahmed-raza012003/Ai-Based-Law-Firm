<header class="topbar">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <button type="button" class="button-toggle-menu me-2">
                    <iconify-icon icon="solar:hamburger-menu-broken" class="fs-24"></iconify-icon>
                </button>
                <h4 class="fw-bold text-uppercase mb-0">Welcome!</h4>
            </div>

            <div class="d-flex align-items-center">
                <!-- Theme Toggle -->
                <button type="button" class="topbar-button" id="light-dark-mode">
                    <iconify-icon icon="solar:moon-bold-duotone" class="fs-24"></iconify-icon>
                </button>

                <!-- Notifications -->
                <div class="dropdown">
                    <button class="topbar-button position-relative" data-bs-toggle="dropdown">
                        <iconify-icon icon="solar:bell-bing-bold-duotone" class="fs-24"></iconify-icon>
                        <span class="badge bg-danger rounded-pill">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="dropdown-header">Notifications</div>
                        <a href="#" class="dropdown-item">New case assigned</a>
                        <a href="#" class="dropdown-item">Upcoming hearing</a>
                    </div>
                </div>

                <!-- User -->
                <div class="dropdown">
                    <a class="topbar-button" data-bs-toggle="dropdown">
                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" class="rounded-circle" width="32">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
