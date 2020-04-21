<?php

namespace Patterns\Structural\Decorator;

class Espresso implements Beverage
{
    private const PRICE = 99;

    public function getCost(): float
    {
        return self::PRICE;
    }

    public function getDescription(): string
    {
        return 'Эспрессо';
    }
}
