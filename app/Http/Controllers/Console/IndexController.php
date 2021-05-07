<?php

namespace App\Http\Controllers\Console;

use App\Services\RuleService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

/**
 * Class IndexController
 * @package App\Http\Controllers\Console
 */
class IndexController extends CommonController
{
    /**
     * 控制台
     * @getMapping(parent_id=1, menu=1)
     * @param RuleService $ruleService
     * @return Renderable
     */
    public function index(RuleService $ruleService): Renderable
    {
        return view('index/index', [
            'menu' => $ruleService->getRule(),
        ]);
    }

    /**
     * 起始页
     * @return Renderable
     */
    public function dashboard(): Renderable
    {
        return view('index/dashboard');
    }

    /**
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        return redirect('/' . ADMIN_PATH);
    }
}
