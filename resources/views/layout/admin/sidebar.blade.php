<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('admin.dashboard') }}" class="text-nowrap logo-img pt-4 pb-2">
                <img src="{{ asset('images/logo/logo.png') }}" width="170" alt="" loading="lazy"/>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('admin/dashboard*') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">MENU</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('admin/change-making-project*') ? 'active' : '' }}" href="{{ route('admin.change_making_project') }}">
                        <span>
                            <i class="ti ti-folders"></i>
                        </span>
                        <span class="hide-menu">Change Making Project</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('admin/award-achievement*') ? 'active' : '' }}" href="{{ route('admin.award_achievement') }}">
                        <span>
                            <i class="ti ti-award"></i>
                        </span>
                        <span class="hide-menu">Award & Achievement</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('admin/speaking-opportunities*') ? 'active' : '' }}" href="{{ route('admin.speaking_opportunities') }}">
                        <span>
                            <i class="ti ti-speakerphone"></i>
                        </span>
                        <span class="hide-menu">Speaking Opportunities</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('admin/contact-with-me*') ? 'active' : '' }}" href="{{ route('admin.contact_with_me') }}">
                        <span>
                            <i class="ti ti-file-phone"></i>
                        </span>
                        <span class="hide-menu">Contact With Me</span>
                    </a>
                </li>
                @if (Auth::guard('admin')->check())
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">AUTH</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" aria-expanded="false" href="{{ route('admin.logout_handler') }}" onclick="event.preventDefault();document.getElementById('logoutForm').submit();">
                        <span>
                            <i class="ti ti-logout"></i>
                        </span>
                        <span class="hide-menu">Logout</span>
                    </a>
                </li>
                <form action="{{ route('admin.logout_handler') }}" id="logoutForm" method="POST">@csrf</form>
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->