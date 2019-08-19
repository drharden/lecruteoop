<?php

spl_autoload_register(function ($className) {
    include str_replace('\\', '/', lcfirst($className)) . '.php';
});