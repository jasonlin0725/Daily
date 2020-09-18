<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('home')}}">首页</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://www.houdunwang.com">后盾人</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.index')}}" >用户列表</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                @auth
                    <a href="{{route('logout')}}" class="btn btn-outline-success my-2 my-sm-0">退出</a>
                @else
                    <a href="{{route('login')}}" class="btn btn-success mr-2 my-sm-0">登录</a>
                    <a href="{{route('user.create')}}" class="btn btn-outline-success my-2 my-sm-0">注册</a>
                @endauth
            </form>
        </div>
    </nav>
    @include('layouts._validate')
    @include('layouts._message')
    @yield('content')
</div>
<script src="/js/app.js"></script>
</body>
</html>