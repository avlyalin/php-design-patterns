<?php

namespace Patterns\Structural\Decorator;

interface Beverage
{
    public function getCost(): float;

    public function getDescription(): string;
}
