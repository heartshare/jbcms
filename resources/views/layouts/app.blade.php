<!doctype html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <title>{{ config('app.name', 'JBCMS') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.5/dist/css/layui.css">
    <script src="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.5/dist/layui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.min.js"></script>
    <link rel="stylesheet" href="{{ asset('static/admin/css/app.css?v=' . VERSION) }}">
</head>
<body class="eims-bg-gray">
@yield('content')
<script src="{{ asset('static/admin/js/common.js?v=' . VERSION) }}"></script>
<script src="{{ asset('static/admin/js/app.js?v=' . VERSION) }}"></script>
</body>
</html>
