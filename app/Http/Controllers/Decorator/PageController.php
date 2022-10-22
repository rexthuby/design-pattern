<?php

namespace App\Http\Controllers\Decorator;

class PageController
{
    public function start()
    {
        (new OrderUpdateClient(new OrderUpdate()))->run();
        (new OrderUpdateManager(new OrderUpdate()))->run();
    }
}
