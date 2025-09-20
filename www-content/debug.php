<?php

$fileName = str_replace(
    '/var/task/user/',
    '',
    $_SERVER['SCRIPT_FILENAME'] ?? '',
);

var_export([
    $fileName,
    $_SERVER,
]);

die;