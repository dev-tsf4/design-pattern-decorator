<?php

namespace App\Entity\Car\Model;

use App\Entity\Car\AbstractCar;

class TouranCar extends AbstractCar
{
    protected $model = 'Touran';

    const PRICE = 28820;

    public function calculatePrice(): int
    {
        return self::PRICE;
    }
}