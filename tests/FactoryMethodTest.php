<?php

namespace Tests;

use Patterns\Creational\FactoryMethod\EmailNotification;
use Patterns\Creational\FactoryMethod\EmailNotificationFactory;
use Patterns\Creational\FactoryMethod\SlackNotification;
use Patterns\Creational\FactoryMethod\SlackNotificationFactory;

class FactoryMethodTest extends BaseTestCase
{

    public function testCanCreateSlackNotification()
    {
        $factory = new SlackNotificationFactory('general');
        $notification = $factory->createNotification();
        $this->assertInstanceOf(SlackNotification::class, $notification);
    }

    public function testCanCreateEmailNotification()
    {
        $factory = new EmailNotificationFactory();
        $notification = $factory->createNotification();
        $this->assertInstanceOf(EmailNotification::class, $notification);
    }

}
