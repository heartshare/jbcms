<?php

namespace App\Http\Controllers\Console;

use Illuminate\Contracts\Support\Renderable;

/**
 * Class NavController
 * @package App\Http\Controllers\Console
 */
class NavController extends CommonController
{
    /**
     * 导航管理
     * @getMapping(parent_id=3, menu=1)
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('nav/index');
    }

    /**
     * 创建
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('nav/form');
    }

    /**
     * 保存
     * @postMapping
     */
    public function store()
    {

    }

    /**
     * 显示
     */
    public function show()
    {

    }

    /**
     * 编辑
     * @return Renderable
     */
    public function edit(): Renderable
    {
        return view('nav/form');
    }

    /**
     * 更新
     * @postMapping
     */
    public function update()
    {

    }

    /**
     * 删除
     * @postMapping
     */
    public function destroy()
    {

    }

    /**
     * 友情链接
     * @return Renderable
     */
    public function link(): Renderable
    {
        return view('nav/link/index');
    }

    /**
     * 创建
     * @return Renderable
     */
    public function linkCreate(): Renderable
    {
        return view('nav/link/form');
    }

    /**
     * 保存
     * @postMapping
     */
    public function linkStore()
    {

    }

    /**
     * 显示
     */
    public function linkShow()
    {

    }

    /**
     * 编辑
     * @return Renderable
     */
    public function linkEdit(): Renderable
    {
        return view('nav/link/form');
    }

    /**
     * 更新
     * @postMapping
     */
    public function linkUpdate()
    {

    }

    /**
     * 删除
     * @postMapping
     */
    public function linkDestroy()
    {

    }
}
