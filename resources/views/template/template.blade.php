<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
</head>

<body class="antialiased">
    <!-- Navigation-->
    <nav class="navbar bg-dark navbar-expand-lg navbar-light" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-white js-scroll-trigger" href="/">Hackathon Groupe 4</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item m-auto"><a class="nav-link text-white js-scroll-trigger ml-2"
                            style="font-size: 17px;" href="#">Cours</a>
                    </li>
                    <li class="nav-item m-auto"><a class="nav-link text-white js-scroll-trigger ml-2" href="#"
                            style="font-size: 17px;">Eleves</a></li>
                    <li class="nav-item m-auto"><a class="nav-link text-white js-scroll-trigger ml-2" href="#"
                            style="font-size: 17px;">Contact</a></li>
                    @if (Route::has('login'))
                    @auth
                    @if (Auth::user()->role_id == 1)
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="btn btn-primary py-2 px-3 mr-3 ml-3"
                            style="border: 2px solid black;">Admin</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-primary py-2 px-3 mr-3 ml-3"
                            style="border: 2px solid black;">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-primary py-2 px-3"
                            style="border: 2px solid black;">Register</a>
                    </li>
                    @endif
                    @endauth
                    @endif

                    @auth
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a class="btn btn-danger py-2 px-3 mr-3 ml-2" style="border: 2px solid black;"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </form>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src=" {{asset('js/app.js')}}"></script>
</body>

</html>