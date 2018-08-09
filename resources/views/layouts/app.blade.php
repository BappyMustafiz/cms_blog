<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
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
                Hey Bappy
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
                <a class="navbar-item">
                  Logout
                </a>
              </div>
            </div>
            <!-- <button class="dropdown navbar-item is-tab">
              Hey Alex <span class="icon"><i class="fa fa-caret-down"></i></span>
              <ul class="dropdown-menu">
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Notifications</a></li>
                <li><a href="#">Settings</a></li>
                <li class="seperator"></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </button> -->
            @endif
          </div>
        </div>
      </nav>
      <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>