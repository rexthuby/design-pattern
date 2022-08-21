<?php

namespace App\Http\Controllers\Delegation;

abstract class AbstractMessenger implements MessengerInterface
{
    /**
     * @var $sender string
     */
    private $sender;

    /**
     * @var $recipient string
     */
    private $recipient;

    /**
     * @var $message string
     */
    private $message;


    public function __construct(string $sender, string $recipient, string $message)
    {
        $this->setSender($sender)
            ->setRecipient($recipient)
            ->setMessage($message);
    }

    /**
     * @param string $sender
     * @return MessengerInterface
     */
    public function setSender(string $sender): MessengerInterface
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * @param string $recipient
     * @return MessengerInterface
     */
    public function setRecipient(string $recipient): MessengerInterface
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @param string $message
     * @return MessengerInterface
     */
    public function setMessage(string $message): MessengerInterface
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return void
     */
    abstract public function send(): void;
}
