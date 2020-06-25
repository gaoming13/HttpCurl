<?php
spl_autoload_register(function ($class) {
    var_dump($class);
    if (false !== stripos($class, 'Gaoming13\HttpCurl')) {
        require_once __DIR__.'/'.str_replace('\\', DIRECTORY_SEPARATOR, substr($class, 18)).'.php';
    }
});
