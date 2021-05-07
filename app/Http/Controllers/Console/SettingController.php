<?php

namespace App\Http\Controllers\Console;

use Illuminate\Contracts\Support\Renderable;

/**
 * Class SettingController
 * @package App\Http\Controllers\Console
 */
class SettingController extends CommonController
{
    /**
     * 基本参数
     * @requestMapping(parent_id=1, menu=1)
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('setting/index');
    }

    /**
     * 公司信息
     * @requestMapping(parent_id=1, menu=1)
     * @return Renderable
     */
    public function company(): Renderable
    {
        return view('setting/company');
    }

    /**
     * 网站信息
     * @requestMapping(parent_id=1, menu=1)
     * @return Renderable
     */
    public function site(): Renderable
    {
        return view('setting/site');
    }

    /**
     * 邮件设置
     * @requestMapping(parent_id=1, menu=1)
     * @return Renderable
     */
    public function email(): Renderable
    {
        return view('setting/email');
    }
}
