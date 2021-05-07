<!doctype html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <title>{{ $page_title ?? '' }}</title>
    <meta name="keywords" content="{{ $page_keywords ?? '' }}"/>
    <meta name="description" content="{{ $page_description ?? ''}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.2/dist/css/layui.css">
    <script src="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.2/dist/layui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.min.js"></script>
    <link rel="stylesheet" href="{{ skin('css/app.css') }}">
    <script type="text/javascript">
        window.site = {
            ROOT_URL: '__ROOT__'
        }
    </script>
</head>

<body>
<div class="shortcut bg-light">
    s
</div>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ url('/') }}">Navbar</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">产品</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">方案</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">应用市场</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">服务与支持</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">交流社区</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">帮助文档</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>

@yield('content')

<script src="{{ skin('js/app.js') }}"></script>
</body>
</html>
