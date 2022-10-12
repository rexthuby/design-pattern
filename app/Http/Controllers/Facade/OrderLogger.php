<?php

namespace App\Http\Controllers\Facade;

class OrderLogger
{
    public function logOrder($order)
    {
        return "Order logged [$order]";
    }
}
