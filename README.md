# polarthink实用工具库
需依赖于[thinkphp6.0](https://github.com/top-think/think)

## 安装
```
composer require polarthink/utils
```

## 使用
### 响应返回
```php
require_once './vendor/autoload.php';

use utils\reponse\Json;

var_dump(Json::success($msg, $data));
var_dump(Json::error('找不到资源', [], 404));
```