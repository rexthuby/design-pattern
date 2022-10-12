<?php

namespace App\Http\Controllers\Facade;

class PageController
{
    public function start()
    {
        dump((new OrderFacade())->saveOrder('My order'));
    }
}
