<?php

namespace Patterns\Structural\Decorator;

abstract class CondimentDecorator implements Beverage
{
    /**
     * @var Beverage
     */
    protected $beverage;

    /**
     * CondimentDecorator constructor.
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

}
