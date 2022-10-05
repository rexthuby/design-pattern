<?php

namespace App\Http\Controllers\LazyLoad;

class User
{
    private $name;

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
