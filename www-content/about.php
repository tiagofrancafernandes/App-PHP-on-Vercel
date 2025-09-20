<?php

$fileName = str_replace(
    '/var/task/user/',
    '',
    $_SERVER['PHP_SELF'] ?? '',
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File: <?= $fileName ?></title>
</head>
<body>
    <h3>
        This is the "<?= $fileName ?>" file. Go to <a href="/">home</a>
    </h3>

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/page?page=about">Page ?</a></li>
    </ul>
    
</body>
</html>
