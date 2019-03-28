# Cherry-Response
The Cherry-project Response wrapper

[![GitHub license](https://img.shields.io/github/license/abgeo07/cherry-response.svg)](https://github.com/ABGEO07/cherry-response/blob/master/LICENSE)

[![GitHub release](https://img.shields.io/github/release/abgeo07/cherry-response.svg)](https://github.com/ABGEO07/cherry-response/releases)

[![Packagist Version](https://img.shields.io/packagist/v/cherry-project/response.svg "Packagist Version")](https://packagist.org/packages/cherry-project/response "Packagist Version")

------------

## Including
**Install from composer** `composer require cherry-project/response`

**Include Autoloader in your main file** (Ex.: index.php)
```php
require_once __DIR__ . '/vendor/autoload.php';
```

## Class Request
Import class
```php
use Cherry\HttpUtils\Response;
```
Crete class new object
```php
$response = new Response();
```

Prepare data for transmission (Ex.: Array)
```php
$arr = [
    'test' => 'vTest',
    'test2' => [
        'test2.1' => '2.1',
        'test2.2' => [
            'test2.2.1' => '2.2.1'
        ]
    ]
];
```

For sending response use **sendResponse()** method

The method takes 3 arguments:
- Content (**Required**; Mixed) - The data for returning;
- Status Code (**Optional**; 200 by default; Integer) - The HTTP Status Code;
- HTTP Headers (**Optional**; empty by default; Key `=>` Value Array) - The HTTP Headers;

```php
echo $response->sendResponse(json_encode($arr), 200, ['Content-Type' => 'application/json']);
```

**2019 &copy; Cherry-project**
