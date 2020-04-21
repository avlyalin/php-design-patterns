<?php

namespace Patterns\Creational\SimpleFactory;

class User
{

    private $firstName;
    private $lastName;

    /**
     * User constructor.
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}
