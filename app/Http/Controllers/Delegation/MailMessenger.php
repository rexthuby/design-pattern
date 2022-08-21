<?php

namespace App\Http\Controllers\Delegation;

class MailMessenger extends AbstractMessenger
{

    /**
     * @param string $sender
     * @param string $recipient
     * @param string $message
     */
    public function __construct(string $sender, string $recipient, string $message)
    {
        parent::__construct($sender, $recipient, $message);
    }

    /**
     * @return void
     */
    public function send(): void
    {
        echo __METHOD__ . '<br>';
    }
}
