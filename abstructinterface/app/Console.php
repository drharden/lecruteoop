<?php

namespace App;

use Vendor\AbstractConsole;

class Console extends AbstractConsole
{
    public function execute()
    {
        var_dump($this->input());
    }
}