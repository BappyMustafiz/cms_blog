<nav class="navbar has-shadow">
  <div class="container">
    <div class="navbar-start">
      <a class="navbar-item" href="route{{route('home')}}">
        <img src="{{asset('images/devmarketer-logo.png')}}" alt="logo">
      </a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
    </div>
    <div class="navbar-end">
      @if (Auth::guest())
      <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
      <a href="{{ route('register') }}" class="navbar-item is-tab">Join the Community</a>
      @else
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Hey {{ Auth::user()->name }}
        </a>

        <div class="navbar-dropdown">
          <a href="#" class="navbar-item">
            Portfolio
          </a>
          <a class="navbar-item">
            Notifications
          </a>
          <a class="navbar-item">
            Settings
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
            Logout
          </a>
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </div>
      @endif
    </div>
  </div>
</nav>
