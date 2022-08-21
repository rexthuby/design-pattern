<?php

namespace App\Http\Controllers\Delegation;

class PageController
{
    public function start()
    {
        $delegation = new DelegationClass();
        $delegation->send();
        dump($delegation);
        $delegation->setMessenger(new SmsMessenger('+380996100404',
            '+88005553535',
            'hello world'));
        $delegation->send();
        dump($delegation);
    }
}
