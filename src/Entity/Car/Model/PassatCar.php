<?php

namespace App\Entity\Car\Model;

use App\Entity\Car\AbstractCar;

class PassatCar extends AbstractCar
{
    protected $model = 'Passat';

    const PRICE = 32430;

    public function calculatePrice(): int
    {
        return self::PRICE;
    }
}