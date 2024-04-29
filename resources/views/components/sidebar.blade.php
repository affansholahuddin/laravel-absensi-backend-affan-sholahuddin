<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            {{-- <a href="{{ route('home') }}">Ash</a> --}}
            <img src="{{ asset('img/logo-company-name.svg') }}" alt="Company name Goat Code" height="60">
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            {{-- <a href="{{ route('home') }}">Ash</a> --}}
            <img src="{{ asset('img/logo-company.svg') }}" alt="Company logo Goat Code" height="45">
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link"><i class="fab fa-dashcube"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('users') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="nav-link"><i class="far fa-user"></i>
                    <span>Users</span></a>
            </li>
            <li class="{{ Request::is('companies/1') ? 'active' : '' }}">
                <a href="{{ route('companies.show', 1) }}" class="nav-link">
                    <i class="fas fa-building"></i>
                    <span>Company</span>
                </a>
            </li>
            <li class="{{ Request::is('attendances') ? 'active' : '' }}">
                <a href="{{ route('attendances.index') }}" class="nav-link">
                    <i class="fas fa-calendar-days"></i>
                    <span>Attendances</span>
                </a>
            </li>
            <li class="{{ Request::is('permissions') ? 'active' : '' }}">
                <a href="{{ route('permissions.index') }}" class="nav-link">
                    <i class="fas fa-file-signature"></i>
                    <span>Permission</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
