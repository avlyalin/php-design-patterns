<?php

namespace Tests;

use Patterns\Creational\SimpleFactory\User;
use Patterns\Creational\SimpleFactory\UserFactory;

class SimpleFactoryTest extends BaseTestCase
{

    public function testCanCreateUser()
    {
        $factory = new UserFactory();
        [$firtName, $lastName] = ['Foo', 'Bar'];
        $user = $factory->createUser($firtName, $lastName);
        $this->assertInstanceOf(User::class, $user);
    }

}
