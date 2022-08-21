<?php

namespace App\Http\Controllers\EventChanel;

use DebugBar\DebugBar;
use Illuminate\Support\Facades\Log;
use Prophecy\Exception\Exception;
use Symfony\Component\ErrorHandler\Debug;

class EventChanel implements EventChanelInterface
{
    /**
     * @var array
     */
    private $subscriberContainer = [];


    /**
     * @param string $eventName
     * @param SubscriberInterface $subscriber
     * @return void
     */
    public function subscribe(string $eventName, SubscriberInterface $subscriber): void
    {
        $this->subscriberContainer[$eventName][] = $subscriber->getName();
    }

    /**
     * @param $eventName
     * @return void
     */
    public function addEvent($eventName): void
    {
        if (!in_array($eventName, $this->subscriberContainer)) {
            $this->subscriberContainer[] = $eventName;
        }
    }

    /**
     * @param string $title
     * @param string $eventName
     * @return array
     */
    public function publish(string $title, string $eventName): array
    {
        $container = [];
        foreach ($this->subscriberContainer[$eventName] as $subscriber) {
            $container[] = "$subscriber take event: $title";
        }
        return $container;
    }
}
