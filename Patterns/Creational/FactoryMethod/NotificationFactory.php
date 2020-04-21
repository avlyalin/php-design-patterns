<?php

namespace Patterns\Creational\FactoryMethod;

interface NotificationFactory
{
    /**
     * @return Notification
     */
    public function createNotification(): Notification;
}
