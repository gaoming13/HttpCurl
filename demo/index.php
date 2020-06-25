<?php
/**
 * 示例
 *
 * @author gaoming13 <gaoming13@yeah.net>
 * @link https://github.com/gaoming13/HttpCurl
 */

require '../autoload.php';

use Gaoming13\HttpCurl\HttpCurl;

list($body, $header, $status, $errno, $error) =
  HttpCurl::request(
    // 请求地址
    'http://example.com/',
    // 请求方式(post/get)
    'get',
    // 传递的参数
    array(
      'user_uid' => 'root',
      'user_pwd' => '123456'
    ),
    // 请求头
    [
      'Accept: text/plain, */*; q=0.01',
      'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
      'Referer: https://www.baidu.com/',
      'Cookie: BD_UPN=123253; PSTM=1592901563;',
    ],
    // 超时时间(秒)
    5
  );

// 响应正文(string)(获取失败返回空字符串)
var_dump($body);
// 响应头(string)(原始格式)
var_dump($header);
// 响应状态(array)(数组)
var_dump($status);
// 错误码(int)(0表示正常响应)
// 其它错误码见：https://www.php.net/manual/zh/function.curl-errno.php
var_dump($errno);