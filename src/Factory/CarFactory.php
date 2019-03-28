<?php

namespace App\Factory;

abstract class CarFactory
{
    public static function create(string $model)
    {
        $model = ucfirst($model);
        $class = 'App\\Entity\\Car\\Model\\' . $model . 'Car';
        return new $class();
    }
}