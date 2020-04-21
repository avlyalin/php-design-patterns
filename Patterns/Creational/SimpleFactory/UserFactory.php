<?php

namespace Patterns\Creational\SimpleFactory;

class UserFactory
{
    /**
     * @param string $firstName
     * @param string $lastName
     * @return User
     */
    public function createUser(string $firstName, string $lastName): User
    {
        return new User($firstName, $lastName);
    }
}
