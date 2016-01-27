<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-left">
        <li>
            <a href="{{ url('/') }}">前台</a>
        </li>
        <li>
            <a href="{{ url('/admin') }}">后台</a>
        </li>

    </ul>
    <ul class="nav navbar-top-links navbar-right">
        @if (Auth::guest())
        <li>
            <a href="{{ url('/login') }}">登录</a>
        </li>
        <li>
            <a href="{{ url('/register') }}">注册</a>
        </li>
        @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }}
                <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ url('/logout') }}"> <i class="fa fa-btn fa-sign-out"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </li>
        @endif
    </ul>
    <!-- /.navbar-top-links -->

    