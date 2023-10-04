<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .top_nav{
            padding: 10px;
            background: lightgray;
        }
        .top_nav ul li{
            display: inline;
        }
        .top_nav ul{
            list-style: none;
            display: flex;
        }
        
        .top_nav ul a {
            text-decoration: none;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div>
        @if (session('msg'))
         <h1>{{session('msg')}}</h1>
        @endif
    </div>
    <div class="top_nav">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Service</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/signup">SignUp</a></li>
        </ul>
    </div>
    @yield('content')
</body>
</html>