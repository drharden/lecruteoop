#!/usr/bin/php
<?php

include 'bootstrap.php';

if ($argc > 1) {
    array_splice($argv,0,1);
    parse($argv);
}

function parse($arg)
{
    $className = 'App\\'.ucfirst($arg[0]);
    array_splice($arg,0,1);
    if (class_exists($className)) {
        $className = new $className();
        $className->set($arg);
        $className->execute();
    }
}