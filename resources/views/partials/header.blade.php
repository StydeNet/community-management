<header class="main-head">
  <div></div>
  <div class="user-menu">
    @auth
    <button class="user-menu-button" id="user_menu_btn">
        <span class="user-menu-name">{{ Auth::user()->name }} <i class="icon-chevron-down"></i></span>
        <span class="user-menu-avatar">
            <img src="/images/user/ramono.jpg" width="36" height="36" alt="Default avatar"/>
        </span>
    </button>

    <ul class="user-menu-list" id="user_menu">
        <li>
            <a href="/admin/settings">Settings</a>
        </li>
        <li>
            <a href="/admin/violations">Violations</a>
        </li>
        <li>
            <a href="/admin/maintenance">Maintenance</a>
        </li>
        <li>
            <a href="/admin/complaints">Complaints</a>
        </li>
        <li>
            <a href="/admin/documents">Documents</a>
        </li>
        <li>
            <a href="/admin/announcements">Announcements</a>
        </li>
        <li>
            <a href="/admin/pages">Pages</a>
        </li>
        <li class="user-menu-out">
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <button type="submit" class="btn">
                  {{ __('Log Out') }}
              </button>
          </form>
        </li>
    </ul>
    @endauth
  </div>
</header>