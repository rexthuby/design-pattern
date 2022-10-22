<?php

namespace App\Http\Controllers\Decorator;

final class OrderUpdate implements OrderUpdateInterface
{
    public function run()
    {
        dump('Order update');
    }
}
