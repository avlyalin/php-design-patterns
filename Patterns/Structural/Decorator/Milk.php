<?php

namespace Patterns\Structural\Decorator;

class Milk extends CondimentDecorator
{
    private const PRICE = 30;

    public function getCost(): float
    {
        return $this->beverage->getCost() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', молоко';
    }

}
