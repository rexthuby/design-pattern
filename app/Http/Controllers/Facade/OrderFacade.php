<?php

namespace App\Http\Controllers\Facade;

class OrderFacade
{
    private $orderLogger;
    private $mailSender;
    private $orderSaver;

    public function __construct()
    {
        $this->mailSender = new OrderMailSender();
        $this->orderSaver = new OrderSave();
        $this->orderLogger = new OrderLogger();
    }

    public function saveOrder($order)
    {
        $result[] = $this->orderSaver->saveOrder($order);
        $result[] = $this->mailSender->sendMailToClient($order);
        $result[] = $this->orderLogger->logOrder($order);
        return $result;
    }
}
