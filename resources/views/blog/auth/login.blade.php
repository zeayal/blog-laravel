<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/blog-auth.css') }}">
    <title>登录</title>
</head>
<body>

    <div class="container">
        <div class="form-auth form-login">
            <h3>登录账户</h3>
            <form action="/login" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="" class="label label-form">邮箱</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" placeholder="请输入用邮箱" name="email">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="password" class="label label-form">密码</label>
                    </div>
                    <div class="col-md-10">
                        <input id="password" type="password" class="form-control" placeholder="请输入密码" name="password">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-10 col-md-offset-2">
                        <button class="btn btn-primary btn-block btn-color-indigo" type="submit">登  录</button>
                    </div>
                </div>
            </form>

            <p>没有账号?<a href="/register">注册一个</a></p>
            <div class="three-party">
                <span>第三方登录</span>
                <ul class="list-none-style">
                    {{--<li><a href="{{ url('/login', ['type' => 'weixin']) }}"><img src="/img/login/img.weixin@2x.png" alt="微信登录"></a></li>--}}
                    {{--<li><img src="/img/login/img.qq@2x.png" alt="QQ登录"></li>--}}
                    {{--<li><img src="/img/login/img.weibo@2x.png" alt="微博登录"></li>--}}
                    <li><a href="{{ url('/login', ['type' => 'github']) }}"><img src="/img/login/img.github@2x.png" alt="Github登录"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>