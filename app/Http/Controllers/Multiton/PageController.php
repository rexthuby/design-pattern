<?php

namespace App\Http\Controllers\Multiton;

class PageController
{
    public function start()
    {
        $mysql = Database::getInstance('mysql');
        $mysql2 = Database::getInstance('mysql');
        $mysql->setName('mysql1');
        $mongo = Database::getInstance('mongo');
        dump($mysql, $mysql2, $mongo);
    }
}
