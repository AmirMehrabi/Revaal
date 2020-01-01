<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    @yield('header-assets')
</head>
<body class="bg-gray-200">
    <div id="app">
        <nav class="bg-white">
            <div class="container mx-auto">
                <div class="flex justify-between items-center py-2 rtl">
                                    <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

          
                <div class="navbar-nav ml-auto my-2 flex items-center">
                    <!-- Authentication Links -->
                    @auth
                    <a class="button mx-4" href="{{ url('/dashboard-dark') }}">{{ __('خانه') }}</a>

                    @endauth

                    </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <!-- Right Side Of Navbar -->
                    <div class="navbar-nav mr-auto my-2 flex items-center">
                        <!-- Authentication Links -->
                        @guest
                            <a class="button mx-4" href="{{ route('login') }}">{{ __('ورود') }}</a>

                            @if (Route::has('register'))
                                <a class="button is-outlined" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>
                            @endif
                        @else
                        <a href="" class="flex items-center text-default no-underline text-sm" >
                            <img src="{{gravatar_url(auth()->user()->email)}}" width="35" class="rounded-full mx-3" alt="">
                            {{auth()->user()->name}}
                        </a>
                                                            <a class="button is-outlined mr-4" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('خروج') }}
                                    </a>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> --}}
                        @endguest
                        </div>
                </div>
                </div>
            </div>
        </nav>

        <main class="py-4 container mx-auto">
            @yield('content')
        </main>
    </div>
</body>

@yield('footer-assets')
</html>
