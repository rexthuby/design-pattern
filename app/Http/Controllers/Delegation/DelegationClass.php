<?php

namespace App\Http\Controllers\Delegation;

class DelegationClass
{
    /**
     * @var MessengerInterface
     */
    private MessengerInterface $messenger;

    //
    public function __construct()
    {
        $this->messenger = new MailMessenger('admin@gmail.com',
            'root@gmail.com',
            'lorem ipsum dolor');
    }

    /**
     * @param MessengerInterface $messenger
     * @return void
     */
    public function setMessenger(MessengerInterface $messenger): void
    {
        $this->messenger = $messenger;
    }

    /**
     *
     * Delegate send function to messenger
     * @return void
     */
    public function send(): void
    {
        $this->messenger->send();
    }
}
