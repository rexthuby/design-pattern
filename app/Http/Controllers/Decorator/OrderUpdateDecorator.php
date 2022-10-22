<?php

namespace App\Http\Controllers\Decorator;

class OrderUpdateDecorator implements OrderUpdateInterface
{
    private $decoratedObject;

    public function __construct(OrderUpdateInterface $decoratedObject)
    {
        $this->decoratedObject = $decoratedObject;
    }

    public function run()
    {
        $this->decoratedObject->run();
        $this->after();
    }

    public function after()
    {

    }
}
