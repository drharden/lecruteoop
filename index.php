<?php

spl_autoload_register(function ($className) {
    include str_replace('\\', '/', $className) . '.php';
});


$posts = new vendor\Posts();
$posts->getAll();
