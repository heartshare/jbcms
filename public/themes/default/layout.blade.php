<!doctype html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <title>{{ $page_title ?? '' }}</title>
    <meta name="keywords" content="{{ $page_keywords ?? '' }}"/>
    <meta name="description" content="{{ $page_description ?? ''}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.5/dist/css/layui.css">
    <script src="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.5/dist/layui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.min.js"></script>
    <link rel="stylesheet" href="{{ skin('css/app.css') }}">
    <script type="text/javascript">
        window.site = {
            ROOT_URL: '{{ request()->root() }}'
        }
    </script>
</head>

<body>

<div class="layui-container">
  <div class="layui-row">
	<ul class="layui-nav" lay-filter="">
	  <li class="layui-nav-item"><a href="">产品</a></li>
	  <li class="layui-nav-item layui-this"><a href="">方案</a></li>
	  <li class="layui-nav-item"><a href="">应用市场</a></li>
	  <li class="layui-nav-item"><a href="javascript:;">服务与支持</a></li>
	  <li class="layui-nav-item"><a href="">交流社区</a></li>
	  <li class="layui-nav-item"><a href="">帮助文档</a></li>
	</ul>
  </div>

  @yield('content')
</div>

<script src="{{ skin('js/app.js') }}"></script>
</body>
</html>
