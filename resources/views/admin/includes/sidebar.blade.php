<div class="sidebar" data-color="rose" data-background-color="white">
  <div class="logo">
    <a href="{{ route('admin.dashboard') }}" class="simple-text logo-mini">
    </a>
    <a href="{{ route('admin.dashboard') }}" class="simple-text logo-normal">
      {{ config('app.name') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <div class="user">
      <div class="photo">
        <img src="/default-avatar.png" />
      </div>
      <div class="user-info">
        <a data-toggle="collapse" href="#collapseAdminDropdown" class="username">
          <span>
            {{ auth()->user()->name }}
            <b class="caret"></b>
          </span>
        </a>
        <div class="collapse" id="collapseAdminDropdown">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="sidebar-mini"> LO </span>
                <span class="sidebar-normal"> Log out </span>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <ul class="nav">
      <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="material-icons">dashboard</i>
          <p> Dashboard </p>
        </a>
      </li>
    </ul>
  </div>
</div>
