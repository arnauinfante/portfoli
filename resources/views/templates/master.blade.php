<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="{{ asset('libs/materialize/css/materialize.min.css') }}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{ asset('css/master.css') }}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="{{ asset('libs/jQuery/jquery-3.3.1.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('libs/popper/popper.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
      <title>@yield('title')</title>

    </head>

    <body>
        <div class="navbar-fixed">
            <nav class="white-text transparent z-depth-0">
                <div class="nav-wrapper">
                    <a href="{{ url('/') }}" class="brand-logo" style="padding: 0px 10px;">Logo</a>
                    <a href="#" class="sidenav-trigger" data-target="#mobile-nav">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="{{ url('/') }}">Inicio</a></li>
                        <li><a href="#Proyectos">Proyectos</a></li>
                        <li><a href="#Curriculum">Curriculum</a></li>
                        @if(Auth::check() )
                            <li><a href="{{ route('home') }}">Dashboard</a></li>
                            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                        @else
                            <li><a class="modal-trigger" href="#modal1">Login</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
        <ul class="sidenav white-text year-text" id="#mobile-nav">
            <li><div class="user-view">
                    <div class="background">
                    </div>
                </div>
            </li>
            <li><a href="sass.html">Inicio</a></li>
            <li><a href="badges.html">Proyectos</a></li>
            <li><a href="collapsible.html">Curriculum</a></li>
            @if(Auth::check())
                <li><a href="{{ route('home') }}">Dashboard</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
            @else
                <li><a class="modal-trigger" href="#modal1">Login</a></li>
            @endif
        </ul>
        <ul id='dropdown1' class='dropdown-content'>
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider" tabindex="-1"></li>
            <li><a href="#!">three</a></li>
            <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
            <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
          </ul>
        {{-- <ul id='dropdown1' class='dropdown-content'>
                <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul> --}}
          @yield('content')
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="{{ asset('libs/materialize/js/materialize.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/events.js') }}"></script>
    </body>
  </html>
