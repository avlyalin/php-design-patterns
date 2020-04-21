<?php

namespace Patterns\Structural\Decorator;

class Americano implements Beverage
{
    private const PRICE = 149;

    public function getCost(): float
    {
        return self::PRICE;
    }

    public function getDescription(): string
    {
        return 'Американо';
    }
}
