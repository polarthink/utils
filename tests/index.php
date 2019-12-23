<?php

require_once '../vendor/autoload.php';

use utils\response\Json;

var_dump(Json::success('成功', ['k' => 'v']));
var_dump(Json::error('失败', [], 404));

var_dump(success('成功', ['k' => 'v']));
var_dump(error('失败', [], 404));