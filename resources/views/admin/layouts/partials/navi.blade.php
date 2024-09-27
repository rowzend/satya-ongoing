<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
    <a href="{{ route('admin.dashboard') }}" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>

    <form class="d-none d-md-flex ms-4">
        <input class="form-control border-0" type="search" placeholder="Search">
    </form>

    <div class="navbar-nav align-items-center ms-auto">
        <!-- Messages Dropdown -->
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-envelope me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Message</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="{{ asset('sadmin/img/user.jpg') }}" alt=""
                            style="width: 40px; height: 40px;">
                        <div class="ms-2">
                            <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                            <small>15 minutes ago</small>
                        </div>
                    </div>
                </a>
                <hr class="dropdown-divider">
                <!-- Add more message items as needed -->
                <a href="#" class="dropdown-item text-center">See all messages</a>
            </div>
        </div>

        <!-- Notifications Dropdown -->
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-bell me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Notification</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item">
                    <h6 class="fw-normal mb-0">Profile updated</h6>
                    <small>15 minutes ago</small>
                </a>
                <hr class="dropdown-divider">
                <!-- Add more notification items as needed -->
                <a href="#" class="dropdown-item text-center">See all notifications</a>
            </div>
        </div>

        <!-- User Profile Dropdown -->
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="{{ asset('sadmin/img/user.jpg') }}" alt=""
                    style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="{{ route('admin.profile.edit') }}" class="dropdown-item">My Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <a href="{{ route('admin.logout') }}" class="dropdown-item"
                        onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Responsive Navigation Menu (for mobile) -->
<div class="d-lg-none">
    <div class="border-top border-gray-200 pt-2 pb-3">
        <a href="{{ route('admin.dashboard') }}" class="dropdown-item">Dashboard</a>
    </div>
    <div class="border-top border-gray-200 pt-4 pb-1">
        <div class="px-4">
            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
        </div>
        <a href="{{ route('admin.profile.edit') }}" class="dropdown-item">Profile</a>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <a href="{{ route('admin.logout') }}" class="dropdown-item"
                onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
        </form>
    </div>
</div>
