<?php

namespace Patterns\Creational\AbstractFactory;

class BmwVehicleFactory extends VehicleFactory
{
    public function createCarModel(): CarModel
    {
        return new BmwCarModel();
    }

    public function createMotorcycleModel(): MotorcycleModel
    {
        return new BmwMotorcycleModel();
    }
}
