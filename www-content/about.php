<?php

$fileName = str_replace(
    '/var/task/user/',
    '',
    $_SERVER['SCRIPT_FILENAME'] ?? '',
);


echo sprintf('this is the %s file. Go to <a href="/">home</a>', $fileName);