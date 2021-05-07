@extends('frontend::layout')

@section('content')
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    src="//www.qiniu.com/assets/banner/banner-invite-2020-index-444f79271392152c8d0bc82af8b8c816689256b20f88bebcb4e8403b71145a3a.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img
                    src="//www.qiniu.com/assets/banner/banner-invite-2020-index-444f79271392152c8d0bc82af8b8c816689256b20f88bebcb4e8403b71145a3a.jpg"
                    class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <div class="layui-fluid ui-block-padding0">

        <div class="layui-main">
            特性四个
        </div>

        <div class="layui-main">
            应用插件
        </div>

        <div class="layui-main">
            主题模板
        </div>

        <div class="layui-main">
            解决方案
        </div>

        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
            <legend>常规用法</legend>
        </fieldset>

        <div class="layui-form">
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label">中文版</label>
                    <div class="layui-input-inline">
                        <input type="text" class="layui-input layui" id="test-11" placeholder="yyyy-MM-dd">
                    </div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">国际版</label>
                    <div class="layui-input-inline">
                        <input type="text" class="layui-input" id="test1-1" placeholder="yyyy-MM-dd">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

