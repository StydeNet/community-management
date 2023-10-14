<nav class="main-nav" id="menu">
    <header class="side-head">
        <a href="{{ route('dashboard' )}}" class="logo">
            <span>Community Management</span>
        </a>
        <button class="menu-toggle" aria-label="Toggle menu" title="Toggle menu" id="menu_btn">
            <i class="icon-menu"></i>
            <i class="icon-x"></i>
        </button>
    </header>

    <ul class="main-menu">
        <li class="menu-label">Property</li>
        <li class="menu-item @if(Route::is('dashboard'))menu-item-active @endif">
            <a href="{{ route('dashboard' )}}" class="menu-link">
                <i class="icon-grid"></i> Dashboard
            </a>
        </li>
        <li class="menu-item @if(Route::is('dues'))menu-item-active @endif">
            <a href="/dues" class="menu-link">
                <i class="icon-dollar-sign"></i> Dues
            </a>
        </li>
        <li class="menu-item @if(Route::is('maintenance') || Route::is('request'))menu-item-active @endif">
            <a href="/maintenance" class="menu-link">
                <i class="icon-alert-triangle"></i> Maintenance
            </a>
        </li>
        <li class="menu-item @if(Route::is('violations') || Route::is('violation'))menu-item-active @endif">
            <a href="/violations" class="menu-link">
                <i class="icon-alert-octagon"></i> Violations
            </a>
        </li>
        <li class="menu-item @if(Route::is('complaints') || Route::is('complaint'))menu-item-active @endif">
            <a href="/complaints" class="menu-link">
                <i class="icon-frown"></i> Complaints
            </a>
        </li>

        <li class="menu-label">Community</li>
        <li class="menu-item @if(Route::is('documents'))menu-item-active @endif">
            <a href="/documents" class="menu-link">
                <i class="icon-briefcase"></i> Documents
            </a>
        </li>
        <li class="menu-item @if(Route::is('directory'))menu-item-active @endif">
            <a href="/directory" class="menu-link">
                <i class="icon-clipboard"></i> Directory
            </a>
        </li>
        <li class="menu-item @if(Route::is('announcements'))menu-item-active @endif">
            <a href="/announcements" class="menu-link">
                <i class="icon-bell"></i> Announcements
            </a>
        </li>
    </ul>
</nav>