<?php // index.php

require_once __DIR__ . '/model.php';
require_once __DIR__ . '/controllers.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/index.php'){
    list_action();
} elseif ($uri === '/show' && isset($_GET['id'])) {
    show_action($_GET['id']);
}