<?php // controllers.php

use Symfony\Component\HttpFoundation\Response;

function list_action()
{
    $posts = get_all_posts();

    require __DIR__ . '/templates/list.html.php';




