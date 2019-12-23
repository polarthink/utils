<?php
namespace utils\response;

use think\Response;

class Json
{
    public static function response(int $status, string $msg, array $data = [], int $code = 200): Response
    {
        if (empty($data)) {
            return Response::create([
                'status' => $status,
                'msg'    => $msg,
            ], 'json', $code);
        } else {
            return Response::create([
                'status' => $status,
                'msg'    => $msg,
                'data'   => $data,
            ], 'json', $code);
        }
    }

    public static function success(string $msg, array $data = []): Response
    {
        return self::response(1, $msg, $data);
    }

    public static function error(string $msg, array $data = [], int $code = 200): Response
    {
        return self::response(0, $msg, $data, $code);
    }
}
