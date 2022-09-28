<?php

namespace App\Http\Controllers\Singleton;

class PageController
{
    public function start()
    {
        $singleton_1 = Logger::getInstance();
        $singleton_2 = Logger::getInstance();
        dump($singleton_2);
        $singleton_1->setProprety('1');
        dump($singleton_2);

    }
}
