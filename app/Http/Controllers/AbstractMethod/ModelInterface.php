<?php

namespace App\Http\Controllers\AbstractMethod;

interface ModelInterface
{
    /**
     * @param string $login
     * @param string $password
     */
    public function __construct(string $login, string $password);

    /**
     * @param string $query
     * @return mixed
     */
    public function query(string $query):string;
}
