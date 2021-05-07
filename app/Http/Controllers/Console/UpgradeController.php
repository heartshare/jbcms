<?php

namespace App\Http\Controllers\Console;

use Illuminate\Contracts\Support\Renderable;

/**
 * Class UpgradeController
 * @package App\Http\Controllers\Console
 */
class UpgradeController extends CommonController
{
    /**
     * 在线更新
     * @getMapping(parent_id=5, menu=1)
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('upgrade/index');
    }
}
