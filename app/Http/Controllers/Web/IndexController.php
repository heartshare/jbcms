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
     * @param Request $request
     * @param ViewService $viewService
     * @return Renderable
     */
    public function index(Request $request, ViewService $viewService): Renderable
    {
        return $viewService->render($request);
    }
}
