<?php

namespace Patterns\Creational\FactoryMethod;

interface Notification
{
    /**
     * @param string $message
     * @return mixed
     */
    public function send(string $message);
}
