<?php

namespace App\Http\Controllers\Delegation;

interface MessengerInterface
{
    /**
     * @param $sender string
     * @return MessengerInterface
     */
    public function setSender(string $sender): MessengerInterface;

    /**
     * @param $recipient string
     * @return MessengerInterface
     */
    public function setRecipient(string $recipient): MessengerInterface;

    /**
     * @param $message string
     * @return MessengerInterface
     */
    public function setMessage(string $message): MessengerInterface;

    /**
     * @return void
     */
    public function send(): void;
}
