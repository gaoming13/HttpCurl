# HttpCurl.class.php
Curl模拟Http工具类

可实现模拟GET、POST、POST上传文件.

## How To Use.

### v2

```php
require 'v2/HttpCurl.class.php';

// GET请求
list($body, $header, $status, $errno, $error) = HttpCurl::get('http://example.com/');

// GET请求，传参
HttpCurl::get('http://example.com/?a=123', array(
	'b' => '56',
	'c' => '78'
));

// GET请求，设置超时时间
HttpCurl::get('http://example.com/', false, 20);

// POST请求
HttpCurl::post('http://example.com/', array(
	'abc'=>'123', 
	'efg'=>'567'
));
HttpCurl::post('http://example.com/', '这是post原始内容');

// POST请求, 文件上传
HttpCurl::post('http://example.com/', array(
	'file1'=>'@/data/sky.jpg',
	'file2'=>'@/data/bird.jpg',
));
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