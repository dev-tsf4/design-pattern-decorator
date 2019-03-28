<?php

namespace App\Entity\Car\Option;

use App\Entity\Car\CarDecorator;

class WarrantyExtension extends CarDecorator
{
    const PRICE = 170;

    /**
     * Retourne le prix total du véhicule et ajoute le prix de l'option
     *
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->car->calculatePrice() + self::PRICE;
    }

    /**
     * Retourne le modèle et la description de l'option
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->car->getDescription() . ' / Extension de garantie 1 an';
    }
}