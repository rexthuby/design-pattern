<?php

namespace App\Http\Controllers\EventChanel;

class Subscriber implements SubscriberInterface
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
