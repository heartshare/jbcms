@extends('layouts.app')

@section('content')
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
        <div class="layui-logo">
            管理后台
        </div>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="#" title="搜索"><i class="layui-icon layui-icon-search"></i></a>
            </li>
            <li class="layui-nav-item">
                <a href="#" title="帮助中心"><i class="layui-icon layui-icon-about"></i></a>
            </li>
            <li class="layui-nav-item">
                <a href="#" title="通知"><i class="layui-icon layui-icon-notice"></i></a>
            </li>
            <li class="layui-nav-item">
                <a href="{{ url('/') }}" title="浏览网站" target="_blank"><i class="layui-icon layui-icon-home"></i></a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:void(0);">
                    <img src="{{ session('auth.avatar') }}" class="layui-nav-img">
                    {{ session('auth.name') }}
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="{{ route('admin.user.profile') }}" target="main">基本资料</a></dd>
                    <dd>
                        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           href="{{ route('logout') }}"> 注销退出 </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </dd>
                </dl>
            </li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree">
                @foreach($menu as $key => $item)
                <li class="layui-nav-item @if($key == 0) layui-nav-itemed @endif">
                    <a href="{{ $item['url'] }}">
						<i class="layui-icon {{ $item['icon'] }}"></i> {{ $item['name'] }}
					</a>
                    <dl class="layui-nav-child">
                        @foreach($item['sub'] as $vo)
                        <dd>
							<a href="{$vo['url']}" target="main">
								<i class="layui-icon {$vo['icon']}"></i> {{ $vo['name'] }}
                            </a>
                        </dd>
                        @endforeach
                    </dl>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="layui-body">
        <iframe name="main" frameborder="0" width="100%" height="100%" src="{{ route('admin.dashboard') }}"></iframe>
    </div>

    <div class="layui-footer">
        &copy; jbcms.com
    </div>
</div>
@endsection
