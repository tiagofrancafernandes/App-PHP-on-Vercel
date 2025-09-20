<?php

declare(strict_types=1);
ob_start();

require_once __DIR__ . '/../core/bootstrap.php';

if (filter_var(request_any_get('tracy', false), FILTER_VALIDATE_BOOL)) {
    require_once __DIR__ . '/tracy.php';
}

$uri = request_uri();

echo '<pre>';

var_dump([
    'uri' => $uri,
    '_SERVER' => $_SERVER,
]);

echo '</pre>';

ob_end_flush();
die;