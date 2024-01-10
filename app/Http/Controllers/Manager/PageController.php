<?php

namespace App\Http\Controllers\Manager;

class PageController
{
//    pattern from:https://youtu.be/jCJ_dxAlHdo?si=0bUxOt4JbScSpG0y
    public function start()
    {
        $result = [];
        $manager = new PaymentManager(app());
        $defaultPayment = $manager->driver();
        $result[] = $defaultPayment->pay(123);
        $paypalPayment = $manager->driver('paypal');
        $result[] = $paypalPayment->pay(333);
        $stripePayment = $manager->driver('stripe');
        $result[] = $stripePayment->pay(7);
        dump($result);
    }
}
