<?php

namespace App\Http\Controllers\Decorator;

class OrderUpdateClient extends OrderUpdateDecorator
{
    public function after()
    {
        dump('Send mail to client');
    }
}
