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
                <li class="nav-item dropdown">
                    <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">
                        <img class="img-responsive img-circle" height="30px" src="{{ Auth::user()->avatar }}" width="30px">
                            {{ Auth::user()->name }}
                        </img>
                    </a>
                    <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">
                            个人中心
                        </a>
                        <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">
                            编辑资料
                        </a>
                        <div class="dropdown-divider">
                        </div>
                        <a class="dropdown-item" href="#" id="logout">
                            <form action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button class="btn btn-block btn-danger" name="button" type="submit">
                                    退出
                                </button>
                            </form>
                        </a>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
