<?php

namespace Patterns\Creational\AbstractFactory;

interface MotorcycleModel
{
    /**
     * @param string $class - класс мотоцикла
     * @param string $color - цвет
     * @return mixed
     */
    public function create(string $class, string $color);
}
