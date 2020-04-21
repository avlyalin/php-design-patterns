<?php

namespace Patterns\Creational\AbstractFactory;

abstract class VehicleFactory
{

    abstract public function createCarModel(): CarModel;

    abstract public function createMotorcycleModel(): MotorcycleModel;

}
