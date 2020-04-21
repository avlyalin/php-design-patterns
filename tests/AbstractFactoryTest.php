<?php

namespace Tests;

use Patterns\Creational\AbstractFactory\BmwVehicleFactory;
use Patterns\Creational\AbstractFactory\CarModel;
use Patterns\Creational\AbstractFactory\HondaVehicleFactory;
use Patterns\Creational\AbstractFactory\MotorcycleModel;
use Patterns\Creational\AbstractFactory\VehicleFactory;

class AbstractFactoryTest extends BaseTestCase
{
    public function provideData(): array
    {
        return [
            [new HondaVehicleFactory()],
            [new BmwVehicleFactory()],
        ];
    }

    /**
     * @dataProvider provideData
     * @param VehicleFactory $factory
     */
    public function testCanCreateCarModel(VehicleFactory $factory)
    {
        $model = $factory->createCarModel();
        $this->assertInstanceOf(CarModel::class, $model);
    }

    /**
     * @dataProvider provideData
     * @param VehicleFactory $factory
     */
    public function testCanCreateMotorcycleModel(VehicleFactory $factory)
    {
        $model = $factory->createMotorcycleModel();
        $this->assertInstanceOf(MotorcycleModel::class, $model);
    }

}
