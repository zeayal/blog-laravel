<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
{{--            <a class="navbar-brand" href="{{ config('website.site') }}"><img src="/img/navbar/brand.zeayal@2x.png" style="height: 44px;" alt="Brand"></a>--}}
            <a class="navbar-brand" href="{{ config('website.site') }}">Zeayal</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/">主页</a>
                </li>
                <li>
                    <a href="/about">关于</a>
                </li>
                <li>
                    <a href="/post">文章</a>
                </li>
                <li>
                    <a href="/contact">联系</a>
                </li>

                @if(Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ Auth::user()->avatar }}" alt="头像"> {{ auth()->user()->username  }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">个人资料</a></li>
                            <li><a href="{{ route('logout') }}">退出</a></li>
                        </ul>
                    </li>
                    @else
                    <li>
                        {{--<a href="{{ config('website.site').'/login' }}">登录</a>--}}
                        <a href="{{ config('website.site').'/getLogin' }}">登录</a>

                    </li>
                    <li>
                        <a href="{{ config('website.site').'/register' }}">注册</a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>