<?php

namespace App\Http\Controllers\Facade;

class OrderMailSender
{
    public function sendMailToClient($order)
    {
        return "Send mail [$order]";
    }
}
