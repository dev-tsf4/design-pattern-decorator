<?php

namespace App\Entity\Car;

interface CarInterface
{
    /**
     * Retourne le prix total du véhicule
     *
     * @return int
     */
    public function calculatePrice(): int;

    /**
     * Retourne le modèle du véhicule
     *
     * @return string
     */
    public function getDescription(): string;
}