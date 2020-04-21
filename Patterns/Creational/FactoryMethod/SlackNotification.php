<?php

namespace Patterns\Creational\FactoryMethod;

class SlackNotification implements Notification
{

    private $channelName;

    /**
     * SlackNotification constructor.
     * @param string $channelName
     */
    public function __construct(string $channelName)
    {
        $this->channelName = $channelName;
    }

    public function send(string $message)
    {
        // TODO: Implement send() method.
    }
}
