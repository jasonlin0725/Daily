<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>系统安装</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
    <link href="{{asset('org/hdjs/package/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @include('layouts.hdjs')
</head>
<body class="admin-site">
<div class="container mt-3">
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-10 m-auto font-weight-light">
                <div class="card bg-light shadow-lg rounded">
                    <div class="card-header text-center bg-white">
                        <h3 class="font-weight-lighter p-3">HDCMS</h3>
                    </div>
                    <div class="card-header bg-light p-0 border-info  shadow-lg">
                        <div class="row">
                            <div class="col-3 border-right text-center p-2 bg-info text-light">欢迎使用</div>
                            <div class="col-3 border-right text-center p-2 bg-info text-light"
                                 style="">配置数据库
                            </div>
                            <div class="col-3 border-right text-center p-2 bg-dark text-light">创建数据表</div>
                            <div class="col-3 text-center p-2 bg-info text-light">完成安装</div>
                        </div>
                    </div>

                    <div class="card-body p-0" style="height: 350px;">
                        <h1 class="text-center text-success mt-5 pt-5">
                            <i class="fa fa-info-circle"></i> 安装成功
                        </h1>
                        <div class="alert alert-success text-center" role="alert">
                            登录帐号: 2300071698@qq.com 登录密码:admin888
                        </div>
                        <div class="text-center">
                            <a href="/admin" class="btn btn btn-primary">访问后台</a>
                        </div>
                    </div>
                    <div class="card-footer text-muted text-center shadow p-3">
                        我们的使命：帮助中小企业快速实现互联网价值,增长企业效益!
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>