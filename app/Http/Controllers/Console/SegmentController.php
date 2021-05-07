<?php

namespace App\Http\Controllers\Console;

use Illuminate\Contracts\Support\Renderable;

/**
 * Class SegmentController
 * @package App\Http\Controllers\Console
 */
class SegmentController extends CommonController
{
    /**
     * 定指标签
     * @getMapping(parent_id=3, menu=1)
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('segment/index');
    }

    /**
     * 创建
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('segment/form');
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
        return view('segment/form');
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
