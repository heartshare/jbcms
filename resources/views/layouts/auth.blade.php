<!doctype html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <title>{{ config('app.name', 'JBCMS') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.2/dist/css/layui.css">
    <script src="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.2/dist/layui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.min.js"></script>
    <link rel="stylesheet" href="{{ asset('static/console/css/auth.css?v=' . VERSION) }}">
</head>
<body>
@yield('content')
<script src="{{ asset('static/console/js/common.js?v=' . VERSION) }}"></script>
<script src="{{ asset('static/console/js/auth.js?v=' . VERSION) }}"></script>
</body>
</html>
