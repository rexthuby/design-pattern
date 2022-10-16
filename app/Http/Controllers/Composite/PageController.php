<?php

namespace App\Http\Controllers\Composite;

class PageController
{
    public function start()
    {
        $potato = new Ingredient('potato', 3, 0.2);
        $chicken = new Ingredient('chicken', 10, 0.4);
        $water = new Ingredient('water', 0.5, 0);
        $ches =  new Ingredient('ches', 9, 0.3);

        $soup = new Dish('soup', 0.3);
        $soup->add($potato)->add($chicken)->add($water);

        $ohapka = new Dish('ohapka', 0.35);
        $ohapka->add($potato)->add($chicken)->add($ches);

        $order = new Order();
        $order->add($soup)->add($ohapka)->add($water)->calcPrice();
        dump($order);
    }
}
