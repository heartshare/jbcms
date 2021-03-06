<!doctype html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'JBCMS') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.5/dist/css/layui.css">
    <link rel="stylesheet" href="{{ asset('static/admin/css/auth.css?v=' . VERSION) }}">
    <script src="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.5/dist/layui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.min.js"></script>
</head>
<body>
@yield('content')
<script src="{{ asset('static/admin/js/common.js?v=' . VERSION) }}"></script>
<script src="{{ asset('static/admin/js/auth.js?v=' . VERSION) }}"></script>
</body>
</html>
