<?php

namespace App\Entity\Car\Option;

use App\Entity\Car\CarDecorator;

class Rim extends CarDecorator
{
    const PRICE = 260;

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
        return $this->car->getDescription() . ' / Jante en Alliage Léger';
    }
}