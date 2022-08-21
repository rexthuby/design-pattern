<?php

namespace App\Http\Controllers\EventChanel;

class PageController
{
    public function start()
    {
        $productChanel = new EventChanel;
        $bananaGroup = new Publisher('bananas', $productChanel);
        $bananaGod = new Publisher('bananas', $productChanel);
        $potatoStore = new Publisher('potatoes', $productChanel);
        $moris = new Subscriber('Moris');
        $anna = new Subscriber('Anna');
        $max = new Subscriber('Max');
        $sona = new Subscriber('Sona');

        $productChanel->subscribe('bananas', $moris);
        $productChanel->subscribe('bananas', $anna);
        $productChanel->subscribe('bananas', $max);
        $productChanel->subscribe('potatoes', $max);
        $productChanel->subscribe('potatoes', $sona);
        dump($productChanel);

        $publishResult[] = $bananaGroup->publish('New bananas');
        $publishResult[] = $bananaGod->publish('New bananas sort');
        $publishResult[] = $potatoStore->publish('New potatoes supply');
        dump($publishResult);
    }
}
