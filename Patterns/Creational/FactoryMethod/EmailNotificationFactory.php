<?php

namespace Patterns\Creational\FactoryMethod;

class EmailNotificationFactory implements NotificationFactory
{

    /**
     * @return Notification
     */
    public function createNotification(): Notification
    {
        return new EmailNotification();
    }
}
