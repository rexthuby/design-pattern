<?php

namespace App\Http\Controllers\Decorator;

class OrderUpdateManager extends OrderUpdateDecorator
{
    public function after()
    {
        dump('Send mail to client from manager and message to admin');
    }
}
