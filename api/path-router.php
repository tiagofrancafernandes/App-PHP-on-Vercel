<?php


$uri = request_uri();

define('CONTENT_PATH', realpath(__DIR__ . '/www-content'));

$fallbackController = function(string $_uri, bool $onlyRoutes = false) {
    // If $onlyRoutes is 'true', other uris will return 404

    if ($onlyRoutes) {
        return __DIR__ . '/404.php';
    }

    $filePath = CONTENT_PATH . "/{$_uri}.php";

    return is_file($filePath) ? $filePath : __DIR__ . '/404.php';
};

$filePath = match (trim(ltrim($uri, '/'))) {
    '', '/', 'home', 'index', 'index.php' => CONTENT_PATH . '/index.php',
    'about', 'about.php' => CONTENT_PATH . '/about.php',
    'contact', 'contact.php' => CONTENT_PATH . '/contact.php',
    // 'index', 'index.php' => CONTENT_PATH . '/index.php',

    // default => __DIR__ . '/404.php',
    default => $fallbackController($uri),
};

response_as_json([
    CONTENT_PATH,
    $filePath,
]);

die();

if ($filePath) {
    require $filePath;
}