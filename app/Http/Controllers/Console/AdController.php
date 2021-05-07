<?php

namespace App\Http\Controllers\Console;

use Illuminate\Contracts\Support\Renderable;

/**
 * Class AdController
 * @package App\Http\Controllers\Console
 */
class AdController extends CommonController
{
    /**
     * 广告位管理
     * @getMapping(parent_id=3, menu=1)
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('ad/index');
    }

    /**
     * 创建广告位
     * @return Renderable
     */
    public function positionCreate(): Renderable
    {
        return view('ad/position/form');
    }

    /**
     * 保存广告位
     * @postMapping
     */
    public function positionStore()
    {

    }

    /**
     * 显示广告位
     */
    public function positionShow()
    {

    }

    /**
     * 编辑广告位
     * @return Renderable
     */
    public function positionEdit(): Renderable
    {
        return view('ad/position/form');
    }

    /**
     * 更新广告位
     * @postMapping
     */
    public function positionUpdate()
    {

    }

    /**
     * 删除广告位
     * @postMapping
     */
    public function positionDestroy()
    {

    }

    /**
     * 广告列表
     * @return Renderable
     */
    public function ad(): Renderable
    {
        return view('ad/index');
    }

    /**
     * 创建广告
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('ad/form');
    }

    /**
     * 保存广告
     * @postMapping
     */
    public function store()
    {

    }

    /**
     * 显示广告
     */
    public function show()
    {

    }

    /**
     * 编辑广告
     * @return Renderable
     */
    public function edit(): Renderable
    {
        return view('ad/form');
    }

    /**
     * 更新广告
     * @postMapping
     */
    public function update()
    {

    }

    /**
     * 删除广告
     * @postMapping
     */
    public function destroy()
    {

    }
}
