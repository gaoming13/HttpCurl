# HttpCurl.class.php
Curl模拟Http工具类

可实现模拟GET、POST请求, 支持上传文件/自定义header头

## How To Use.

使用composer
```bash
composer require gaoming13/http-curl
```

```php
use Gaoming13\HttpCurl\HttpCurl;
```

### v2.2

```php
HttpCurl::request('http://example.com/', 'get');

HttpCurl::request('http://example.com/?a=123', 'get', array(
	'b' => 456
));

HttpCurl::request('http://example.com/', 'post', array(
    'user_uid' => 'root',
    'user_pwd' => '123456'
));

HttpCurl::request('http://example.com/', 'post', array(
	'file1' => '@/data/sky.jpg',
	'file2' => '@/data/bird.jpg'
));

HttpCurl::request('http://example.com/', 'post', array(
	'file1' => '@G:\wamp\www\data\sky.jpg',
	'file2' => '@G:\wamp\www\data\bird.jpg'
));

HttpCurl::request('http://example.com/', 'post', array(
    'user_uid' => 'root',
    'user_pwd' => '123456'
), array('Content-Type:application/json'));
```

### v1

```php
require 'v1/HttpCurl.class.php';

// GET请求
HttpCurl::get('http://api.example.com/');

// GET请求, 并json_decode返回的数组
HttpCurl::get('http://api.example.com/?a=123&b=456', 'json');

// POST请求
HttpCurl::post('http://api.example.com/?a=123', array(
	'abc'=>'123', 
	'efg'=>'567'
));
HttpCurl::post('http://api.example.com/', '这是post原始内容', 'json');

// POST请求, 文件上传
HttpCurl::post('http://api.example.com/', array(
	'file1'=>'@/data/sky.jpg',
	'file2'=>'@/data/bird.jpg',
));
```

## License

MIT
