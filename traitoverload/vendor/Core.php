<?php

namespace Vendor;

class Core
{
    private $magicProperty = '';

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function  __isset($property)
    {
        return isset($this->$property);
    }

    public function __call($name, $arguments)
    {
        var_dump($name, $arguments);
    }

    public function __toString()
    {
        return 'magic string';
    }
}