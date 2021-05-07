<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;

/**
 * Trait JsonResponse
 * @package App\Http\Responses
 */
trait Json
{
    /**
     * @var string 客户端 ID
     */
    protected string $clientId = 'X-Client-Id';

    /**
     * @var int 错误码
     */
    protected int $errorCode = 0;

    /**
     * 返回封装后的API数据到客户端
     * @param mixed $data 要返回的数据
     * @param array $headers 发送的Header信息
     * @return JsonResponse
     */
    protected function succeed($data, array $headers = []): JsonResponse
    {
        return $this->response([
            'status' => 'success',
            'data' => $data,
        ], $headers);
    }

    /**
     * 返回异常数据到客户端
     * @param $message
     * @param array $headers
     * @return JsonResponse
     */
    protected function failed($message, array $headers = []): JsonResponse
    {
        return $this->response([
            'status' => 'failed',
            'errors' => [
                'code' => $this->getErrorCode(),
                'message' => $message,
            ],
        ], $headers);
    }

    /**
     * 返回 Json 数据格式
     * @param $data
     * @param array $headers
     * @return JsonResponse
     */
    protected function response($data, array $headers = []): JsonResponse
    {
        $clientId = request()->header($this->clientId);

        if (empty($clientId)) {
            $clientId = md5(session_create_id((string)mt_rand()));
        }

        return response()->json($data, 200, array_merge($headers, [$this->clientId => $clientId]));
    }

    /**
     * @return int
     */
    protected function getErrorCode(): int
    {
        return $this->errorCode;
    }

    /**
     * @param $errorCode
     * @return $this
     */
    protected function setErrorCode($errorCode): Json
    {
        $this->errorCode = $errorCode;

        return $this;
    }
}
