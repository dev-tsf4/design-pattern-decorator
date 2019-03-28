<?php

namespace App\Entity\Car\Model;

use App\Entity\Car\AbstractCar;

class GolfCar extends AbstractCar
{
    protected $model = 'Golf';

    const PRICE = 20650;

    public function calculatePrice(): int
    {
        return self::PRICE;
    }
}