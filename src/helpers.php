<?php

use think\Response; 
use utils\response\Json;

if (!function_exists('success')) {
    function success(string $msg, array $data = []): Response
    {
        return Json::success($msg, $data);
    }
}

if (!function_exists('error')) {
    function error(string $msg, array $data = [], int $code = 200): Response
    {
        return Json::error($msg, $data, $code);
    }
}
