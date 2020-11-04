<!doctype html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
         ul
        {
            padding: 0;
            margin: 0;
        }

        li
        {
            list-style: auto;
        }

        .user-wrapper, .message-wrapper
        {
            border: 1px solid #dddddd;
            overflow-y: auto;
        }

        .user-wrapper
        {
            height: 600px;
        }

        .user
        {
            cursor: pointer;
            padding: 5px 0;
            position: relative;
        }

        .user:hover
        {
            background: #eeeeee
        }

        .user:last-child
        {
            margin-bottom: 0;
        }

        .pending
        {
            position: absolute;
            left: 13px;
            top: 9px;
            background: #bE00ff;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }

        .media-left
        {
            margin: 0 10px;
        }

        .media-left img
        {
            width: 64px;
            border-radius: 64px;
        }

        .media-body p 
        {
            margin: 4px 0;
        }
        .message-wrapper 
        {
            padding: 10px;
            height: 526px;
            background-image: url(image/foto.jpg);
        }

        .messages .message
        {
            margin-bottom: 15px;
        }

        .messages .message:last-child
        {
            margin-bottom: 0;
        }

        .received, .sent
        {
            width: 45%;
            padding: 3px 10px;
            border-radius: 10px;
        }

        .received
        {
            background: #65e9a7
        }

        .sent
        {
            background: #2dfc04;
            float: right;
            text-align: right;
        }

        .message p 
        {
            margin: 1px 0;
        }

        .date
        {
            color: #6b6565;
            font-size: 12px;
        }

        .active
        {
            background: #291818;
        }

        input[type=text]
        {
            width: 100%;
            padding: 12px 20px;
            margin: 11px 0 0 0;
            display: inline-block;
            border-radius: 4px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #cccccc;
        }

        input[type=text]:focus
        {
            border: 1px solid #aaaaaa
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
