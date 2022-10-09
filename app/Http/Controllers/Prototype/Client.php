<?php

namespace App\Http\Controllers\Prototype;

class Client
{
    private int $id;
    private string $name;
    private array $order = [];

    /**
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id, string $name)
    {
        $this->name = $name;
        $this->id = $id;
    }

    public function addOrder(Order $order)
    {
        $this->order[$order->id] = $order;
    }
}
