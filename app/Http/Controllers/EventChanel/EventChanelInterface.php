<?php

namespace App\Http\Controllers\EventChanel;

use phpDocumentor\Reflection\DocBlock\Tags\Param;

interface EventChanelInterface
{
    public function subscribe(string $eventName, SubscriberInterface $subscriber):void;

    public function addEvent(string $eventName):void;

    public function publish(string $title, string $eventName):array;
}
