<?php

namespace App\Http\Controllers\Prototype;

use Carbon\Carbon;

class PageController
{
    public function start()
    {
        $client = new Client(1, 'Alex');
        $carbon = Carbon::parse('10.09.2022');
        $order = new Order(7, $carbon, $client);
        $client->addOrder($order);
        $cloneOrder = clone $order;
        $cloneOrder->deliveryData->addDay();

        dump($client, $order, $cloneOrder);
    }
}
