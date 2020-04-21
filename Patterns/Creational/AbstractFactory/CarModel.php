<?php

namespace Patterns\Creational\AbstractFactory;

interface CarModel
{
    /**
     * @param string $type - тип кузова
     * @param string $color - цвет
     * @return mixed
     */
    public function create(string $type, string $color);
}
