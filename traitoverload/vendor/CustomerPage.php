<?php

namespace Vendor;

class CustomerPage extends Core
{
    use DeclensionTrait;

    public function __construct()
    {
        $this->magicProperty = 'Customer Connection';
        $this->magicMethod('magic params');
    }

    public function hello($name)
    {
        echo $this->magicProperty." ";
        return $this->greeting($name);
    }
}

trait DeclensionTrait
{
    function greeting($name)
    {
        return 'Привет ' . $name . '! Как дела?';
    }
}