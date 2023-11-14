<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{public_path('https://github.com/prukon/laravel/blob/b56054b7096317a3c40b1f39c41691c98d9f386d/node_modules/bootstrap/scss/bootstrap.scss')}}">
</head>
<body>
<div>
    <div>
        <nav>
            <ul>
                <li><a href="{{route('main.index')}}">Main</a></li>
                <li><a href="{{route('post.index')}}">Posts</a></li>
                <li><a href="{{route('about.index')}}">About</a></li>
                <li><a href="{{route('contact.index')}}">Contacts</a></li>
            </ul>
        </nav>
    </div>
    @yield('content')
</div>
</body>
</html>
