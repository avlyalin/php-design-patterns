<?php

namespace Patterns\Behavioral\Observer;

abstract class Model
{
    protected $attributes = [];

    /** Сохранение модели
     * @param array $attributes
     * @return void
     */
    public function save(array $attributes = [])
    {
        $this->fill($attributes);
    }

    /**
     * Заполнение атрибутов
     * @param array $attributes
     * @return void
     */
    public function fill(array $attributes)
    {
        foreach ($attributes as $name => $value) {
            if (array_key_exists($name, $this->attributes)) {
                $this->attributes[$name] = $value;
            }
        }
    }
}
