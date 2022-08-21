<?php

namespace App\Http\Controllers\EventChanel;

class Publisher implements PublisherInterface
{
    private $name;
    private $productChanel;

    public function __construct(string $name, EventChanelInterface $productChanel)
    {
        $this->name = $name;
        $productChanel->addEvent($name);
        $this->productChanel = $productChanel;
    }

    public function publish(string $title): array
    {
        return $this->productChanel->publish($title, $this->name);
    }
}
