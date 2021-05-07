<?php

namespace App\Http\Controllers\Console;

use Illuminate\Contracts\Support\Renderable;

/**
 * Class UserController
 * @package App\Http\Controllers\Console
 */
class UserController extends CommonController
{
    /**
     * 用户管理
     * @getMapping(parent_id=4, menu=1)
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('user/index');
    }

    /**
     * 创建
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('user/form');
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
        return view('user/form');
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
     * 个人资料
     * @return Renderable
     */
    public function profile(): Renderable
    {
        return view('user/profile');
    }

    /**
     * 修改密码
     * @return Renderable
     */
    public function password(): Renderable
    {
        return view('user/password');
    }
}
