<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}" />
    <script src="{{asset('js/header.js')}}"defer></script>

    <title>Document</title>
</head>
<body>
<header>
    <a href="/" class="logo">
        <p>Tech <span>Bullet</span></p>
    </a>
    <div class="menu">
        <ul>
            <li  @if((strpos($_SERVER['REQUEST_URI'], "/")) )
                 class="active"
                @endif  >  <a href="/">Home</a></li>

            <li  @if((strpos($_SERVER['REQUEST_URI'], "about")) )
                 class="active"
                @endif  > <a href="/about">About</a></li>


            <li @if((strpos($_SERVER['REQUEST_URI'], "course")) )
                class="active"
                @endif ><a href="/course">Subjects</a></li>


            <li @if((strpos($_SERVER['REQUEST_URI'], "announcement")) )
                class="active"
                @endif ><a href="/announcement">Announcements</a></li>

            <li @if((strpos($_SERVER['REQUEST_URI'], "blog")) )
                class="active"
                @endif ><a href="/blog">Blogs</a></li>

            @if(Auth::check())
                @if(Auth::user()->checkRole())
                <li class="login"><a href="/admin">{{\Illuminate\Support\Facades\Auth::user()->name}}</a></li>
               @else
                    <li class="login"><a href="/home">{{\Illuminate\Support\Facades\Auth::user()->name}}</a></li>
              @endif
            @else
                <li class="login"><a href="/login">Login</a></li>

            @endif
        </ul>


    </div>
    <div class="menu-toggler">
        <button class="humb"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z"/></svg></button>
        <button class="close hidden"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg></button>
    </div>
</header>
</body>
</html>
