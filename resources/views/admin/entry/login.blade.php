<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
    <meta charset="utf-8"/>
    <title>laravel开发webapp管理后台</title>
    <meta name="description"content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="/static/admin/bootstrap-3.3.0-dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/admin/admin.ui/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="/static/admin/admin.ui/css/app.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="/static/admin/admin.ui/js/ie/html5shiv.js"></script>
    <script src="/static/admin/admin.ui/js/ie/respond.min.js"></script>
    <script src="/static/admin/admin.ui/js/ie/excanvas.js"></script>
    <![endif]-->
</head>
<body class="">
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xxl">
        <a class="navbar-brand block" href="">webapp管理后台</a>
        <section class="panel panel-default bg-white m-t-lg">
            <header class="panel-heading text-center">
                <strong>管理员后台登陆</strong>
            </header>
            <form method="post" action="" class="panel-body wrapper-lg">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label">用户名</label>
                    <input required type="text" class="form-control input-lg" name="username">
                </div>
                <div class="form-group">
                    <label class="control-label">密 码</label>
                    <input required type="password"  class="form-control input-lg" name="password">
                </div>
                {{--<div class="form-group">--}}
                    {{--<label class="control-label">验证码</label>--}}
                    {{--<input type="text"  class="form-control input-lg col-md-6" name="code">--}}
                    {{--<img src="" onclick="this.src=this.src+'&'+Math.random()">--}}
                {{--</div>--}}
                @if(session('error'))
                    <div class="alert alert-danger" role="alert">{{session('error')}}</div>
                @endif
                <button type="submit" class="btn btn-primary">登陆后台</button>
            </form>
        </section>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder">
        <p>
            <small>Powered By www.yoho167.com<br> copyright &copy; 2017</small>
        </p>
    </div>
</footer>
<script src="/static/admin/admin.ui/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/static/admin/admin.ui/js/bootstrap.js"></script>
<!-- App -->
<script src="/static/admin/admin.ui/js/app.js"></script>
<script src="/static/admin/admin.ui/js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/static/admin/admin.ui/js/app.plugin.js"></script>
</body>
</html>