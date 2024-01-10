<?php

namespace App\Http\Controllers\Manager;

class StripeDriver implements PaymentInterface
{
    public function pay(float $amount): string
    {
        return "Stripe send: $amount";
    }
}
