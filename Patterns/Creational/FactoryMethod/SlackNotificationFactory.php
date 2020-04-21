<?php

namespace Patterns\Creational\FactoryMethod;

class SlackNotificationFactory implements NotificationFactory
{
    /**
     * @var string
     */
    private $channelName;

    /**
     * SlackNotificationFactory constructor.
     * @param string $channelName
     */
    public function __construct(string $channelName)
    {
        $this->channelName = $channelName;
    }

    public function createNotification(): Notification
    {
        return new SlackNotification($this->channelName);
    }
}
