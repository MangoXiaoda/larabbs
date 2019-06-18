<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
    <div class="container">
        <!-- Branding Image -->
        <a class="navbar-brand " href="{{ url('/') }}">
            LaraBBS
        </a>
        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ active_class(if_route('topics.index')) }}">
                    <a class="nav-link" href="{{ route('topics.index') }}">
                        话题
                    </a>
                </li>
                <li class="nav-item {{ category_nav_active(1) }}">
                    <a class="nav-link" href="{{ route('categories.show', 1) }}">
                        分享
                    </a>
                </li>
                <li class="nav-item {{ category_nav_active(2) }}">
                    <a class="nav-link" href="{{ route('categories.show', 2) }}">
                        教程
                    </a>
                </li>
                <li class="nav-item {{ category_nav_active(3) }}">
                    <a class="nav-link" href="{{ route('categories.show', 3) }}">
                        问答
                    </a>
                </li>
                <li class="nav-item {{ category_nav_active(4) }}">
                    <a class="nav-link" href="{{ route('categories.show', 4) }}">
                        公告
                    </a>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        登录
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        注册
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link mt-1 mr-3 font-weight-bold" href="{{ route('topics.create') }}">
                        <i class="fa fa-plus">
                        </i>
                    </a>
                </li>
                <li class="nav-item notification-badge">
                    <a class="nav-link mr-3 badge badge-pill badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'secondary' }} text-white" href="{{ route('notifications.index') }}">
                        {{ Auth::user()->notification_count }}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">
                            <img class="img-responsive img-circle" height="30px" src="{{ Auth::user()->avatar }}" width="30px">
                                {{ Auth::user()->name }}
                            </img>
                        </a>
                        <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">
                                <i class="far fa-user mr-2">
                                </i>
                                个人中心
                            </a>
                            <div class="dropdown-divider">
                            </div>
                            <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">
                                <i class="far fa-edit mr-2">
                                </i>
                                编辑资料
                            </a>
                            <div class="dropdown-divider">
                            </div>
                            <a class="dropdown-item" href="#" id="logout">
                                <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('您确定要退出吗？');">
                                    {{ csrf_field() }}
                                    <button class="btn btn-block btn-danger" name="button" type="submit">
                                        退出
                                    </button>
                                </form>
                            </a>
                        </div>
                    </li>
                    @endguest
                </li>
            </ul>
        </div>
    </div>
</nav>
