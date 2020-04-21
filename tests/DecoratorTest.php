<?php

namespace Tests;

use Patterns\Structural\Decorator\Americano;
use Patterns\Structural\Decorator\Espresso;
use Patterns\Structural\Decorator\Milk;
use Patterns\Structural\Decorator\Mocha;

class DecoratorTest extends BaseTestCase
{

    public function testCanCreateEspresso()
    {
        $beverage = new Espresso();
        $this->assertEquals('Эспрессо', $beverage->getDescription());
        $this->assertEquals(99, $beverage->getCost());
    }

    public function testCanCreateEspressoWithMocha()
    {
        $beverage = new Espresso();
        $beverage = new Mocha($beverage);
        $this->assertEquals('Эспрессо, шоколад', $beverage->getDescription());
        $this->assertEquals(149, $beverage->getCost());
    }

    public function testCanCreateAmericanoWithMilkAndMocha()
    {
        $beverage = new Americano();
        $beverage = new Mocha($beverage);
        $beverage = new Milk($beverage);
        $this->assertEquals('Американо, шоколад, молоко', $beverage->getDescription());
        $this->assertEquals(229, $beverage->getCost());
    }
}
