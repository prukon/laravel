<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>
<body>
<div class="container">
    <div class="row">
        
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Main</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('post.index')}}">Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about.index')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact.index')}}">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

{{--        <nav>--}}
{{--            <ul>--}}
{{--                <li><a href="{{route('main.index')}}">Main</a></li>--}}
{{--                <li><a href="{{route('post.index')}}">Posts</a></li>--}}
{{--                <li><a href="{{route('about.index')}}">About</a></li>--}}
{{--                <li><a href="{{route('contact.index')}}">Contacts</a></li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
    </div>
    @yield('content')
</div>
</body>
</html>
