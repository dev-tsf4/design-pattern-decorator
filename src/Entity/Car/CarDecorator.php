<?php

namespace App\Entity\Car;

abstract class CarDecorator implements CarInterface
{
    /**
     * @var CarInterface
     */
    protected $car;

    public function __construct(CarInterface $car)
    {
        $this->car = $car;
    }
}