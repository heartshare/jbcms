<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

/**
 * @OA\Info(title="JBCMS API", version="1.0", contact={"email": "support@jbcms.com"})
 * Class IndexController
 * @package app\controller\api
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
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->succeed([
            'name' => APP_NAME,
            'version' => VERSION,
        ]);
    }
}
