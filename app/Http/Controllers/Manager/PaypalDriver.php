<?php

namespace App\Http\Controllers\Manager;

class PaypalDriver implements PaymentInterface
{
    public function pay(float $amount): string
    {
        return "Paypal successfully send: $amount";
    }
}
