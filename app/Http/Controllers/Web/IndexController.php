<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\ViewService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

/**
 * Class IndexController
 * @package App\Http\Controllers\Web
 */
class IndexController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Services\ViewService $viewService
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, ViewService $viewService): Renderable
    {
        return $viewService->render($request);
    }
}
