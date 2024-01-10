<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Support\Manager;

/**
 * @method PaymentInterface driver(string $key = 'paypal')
 */
class PaymentManager extends Manager
{

    public function getDefaultDriver(): string
    {
        return 'paypal';
    }

    public function createPaypalDriver(): PaymentInterface
    {
        return new PaypalDriver();
    }

    public function createStripeDriver(): PaymentInterface
    {
        return new StripeDriver();
    }
}
