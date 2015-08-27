# HttpCurl.class.php
Curl模拟Http工具类

可实现模拟GET、POST、POST上传文件.

## How To Use.

```php
require 'HttpCurl.class.php';

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

```php
require 'HttpCurl.class.php';

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