<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Posty</title>
</head>
<body>
    <nav class="nav">
        <div class="container container-nav">
            <div class="menu-controls">
                <h2><a href="{{route('home')}}">Home</a></h2>
                <button id="menuBtn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <ul class="first close">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                @auth
                    <li>
                        <a href="{{route('dashboard')}}">Dashboard</a>
                    </li>
                @endauth
                <li>
                    <a href="{{route('post')}}">Post</a>
                </li>
            </ul>
            <ul class="second close">
                @auth
                    <li>
                        <a href="{{route('user',auth()->user())}}">{{auth()->user()->username}}</a>
                    </li>
                    <li>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <input type="submit" value="logout" class="logout">
                        </form>
                    </li>
                @endauth

                @guest
                    <li>
                        <a href="{{route('login')}}">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                 @endguest
            </ul>
        </div>
    </nav>
   @yield('content')
   <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
