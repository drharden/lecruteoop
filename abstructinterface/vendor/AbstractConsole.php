<?php

namespace Vendor;

abstract class AbstractConsole implements ConsoleInterface
{
    private $arg;

    abstract public function execute();

    public function set($arg)
    {
        $this->arg = $arg;
    }

    public function input()
    {
        return $this->arg;
    }
}