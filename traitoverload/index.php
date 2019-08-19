<?php

spl_autoload_register(function ($className) {
    include str_replace('\\', '/', lcfirst($className)) . '.php';
});

$a = new \Vendor\CustomerPage();
echo $a->hello('Хуйло');
echo "<br>".$a;