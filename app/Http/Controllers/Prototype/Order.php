<?php

namespace App\Http\Controllers\Prototype;

use Carbon\Carbon;

class Order
{
    public int $id;
    public Carbon $deliveryData;
    private Client $client;

    /**
     * @param $id
     * @param Carbon $deliveryData
     * @param Client $client
     */
    public function __construct($id, Carbon $deliveryData, Client $client)
    {
        $this->id = $id;
        $this->deliveryData = $deliveryData;
        $this->client = $client;
    }

    public function __clone(): void
    {
        $this->id = $this->id + 1;
        $this->deliveryData = clone $this->deliveryData;
        $this->client->addOrder($this);
    }

}
