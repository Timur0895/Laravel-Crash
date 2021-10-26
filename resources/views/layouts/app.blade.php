<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="container mx-auto">
    <nav class="p-6 flex justify-between mb-4 border-b-4">
        <ul class="flex items-center text-black my-2">
            <li class="mx-2">
                <a href="/" class="rounded-xl text-xl p-4 border-b-4 border-t-4 border-light-blue-500 border-opacity-50">Home</a>
            </li>
            <li class="mx-2">
                <a href="{{ route('dashboard') }}" class="rounded-xl text-xl p-4 border-b-4 border-t-4 border-light-blue-500 border-opacity-50">Dashboard</a>
            </li>
            <li class="mx-2">
                <a href="{{ route('posts') }}" class="rounded-xl text-xl p-4 border-b-4 border-t-4 border-light-blue-500 border-opacity-50">Posts</a>
            </li>
        </ul>

        <ul class="flex items-center text-black">
            @auth
                <li class="mx-2">
                    <a href="" class="rounded-xl text-xl p-4 border-b-4 border-t-4 border-light-blue-500 border-opacity-50">{{ auth()->user()->name }}</a>
                </li>
                <li class="mx-2">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="rounded-xl text-xl p-4 border-b-4 border-t-4 border-light-blue-500 border-opacity-50">Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li class="mx-2">
                    <a href="{{ route('login') }}" class="rounded-xl text-xl p-4 border-b-4 border-t-4 border-light-blue-500 border-opacity-50">Login</a>
                </li>
                <li class="mx-2">
                    <a href="{{ route('register') }}" class="rounded-xl text-xl p-4 border-b-4 border-t-4 border-light-blue-500 border-opacity-50">Register</a>
                </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>
