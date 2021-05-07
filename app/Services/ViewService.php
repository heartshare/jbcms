<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

/**
 * Class ViewService
 * @package App\Services
 */
class ViewService
{
    /**
     * 渲染视图模板
     * @param Request $request
     * @return Renderable
     */
    public function render(Request $request): Renderable
    {
        $path = $request->path();

        View::addNamespace('frontend', public_path('themes/default/html'));

        if ($path === '/') {
            return view('frontend::index');
        }

        return $this->template($path);
    }

    /**
     * 获取内容视图模板
     * @param $path
     * @return mixed|string
     */
    private function template($path): string
    {
        $content = Article::where('title', $path)->first();

        if (is_null($content)) {
            return view('frontend::error');
        }

        return view('frontend::' . $content->tpl);
    }
}
