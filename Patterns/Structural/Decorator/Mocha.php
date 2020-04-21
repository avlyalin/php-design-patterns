<?php

namespace Patterns\Structural\Decorator;

class Mocha extends CondimentDecorator
{
    private const PRICE = 50;

    public function getCost(): float
    {
        return $this->beverage->getCost() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', шоколад';
    }

}
