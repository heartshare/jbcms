<?php

namespace App\Http\Controllers\Console;

use Illuminate\Contracts\Support\Renderable;

/**
 * Class ContentController
 * @package App\Http\Controllers\Console
 */
class ContentController extends CommonController
{
    /**
     * 内容管理
     * @getMapping(parent_id=2, menu=1)
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('content/index');
    }

    /**
     * 创建
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('content/form');
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
        return view('content/form');
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
}
