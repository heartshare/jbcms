<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * @OA\Info(title="JBCMS API", version="1.0", contact={"email": "support@jbcms.com"})
 * Class IndexController
 * @package App\Http\Controllers\API
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *  path="/",
     *  summary="首页",
     *  description="首页的详细描述",
     *  operationId="index",
     *  @OA\Response(response="200", description="An example resource")
     * )
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        return $this->succeed([
            'name' => APP_NAME,
            'version' => VERSION,
            'path' => Str::substr($request->path(), 4),
        ]);
    }
}
