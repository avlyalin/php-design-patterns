<?php

namespace Patterns\Creational\AbstractFactory;

class HondaVehicleFactory extends VehicleFactory
{
    public function createCarModel(): CarModel
    {
        return new HondaCarModel();
    }

    public function createMotorcycleModel(): MotorcycleModel
    {
        return new HondaMotorcycleModel();
    }
}
