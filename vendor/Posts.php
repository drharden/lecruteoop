<?php
namespace vendor;

class Posts extends DB
{
    protected $tblName = 'posts';

    public function getAll()
    {
        var_dump($this->selectAll());
    }

}