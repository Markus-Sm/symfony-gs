<?php // index.php

require_once __DIR__ . '/model.php';
require_once __DIR__ . '/controllers.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/index.php' || $uri === '/') {
    list_action();
} elseif ($uri === '/index.php/show' || $uri === '/show') {
    show_action($_GET['id']);
}else {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
}