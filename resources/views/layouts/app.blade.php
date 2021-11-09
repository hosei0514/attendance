<!doctype html>
<html style="height: 100vh;" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Atte') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/attendance.css') }}" rel="stylesheet">
    <link href="{{ asset('css/check.css') }}" rel="stylesheet">
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh;">
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" style="font-size: 30px;" href="{{ route('home') }}">
                    Atte
                </a>

                <div class="font-weight-bold">
                    <ul class="list-group list-group-horizontal list-inline">
                        <li>
                            <a class="text-decoration-none text-dark" href="{{ route('home') }}">
                                ホーム
                            </a>
                        </li>

                        <li class="ml-5">
                            <a class="text-decoration-none text-dark" href="{{ route('attendance') }}">
                                日付一覧
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                        <li class="ml-5">
                            <a class="text-decoration-none text-dark" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('ログアウト') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
        </nav>

        <main class="py-4" style="flex: 1; height: 100vh;">
            @yield('content')
        </main>
        <footer style="display: flex; justify-content: center; align-items: center; background-color: white; height: 50px; width: 100%;">
            <a style="text-align: center; font-weight: bolder; font-size: 15px; text-decoration: none; color: black;" href="/">Atte, inc.</a>
        </footer>
    </div>
</body>
</html>