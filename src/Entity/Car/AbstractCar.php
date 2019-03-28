<?php

namespace App\Entity\Car;

abstract class AbstractCar implements CarInterface
{
    protected $model;

    /**
     * {@inheritDoc}
     */
    public function getDescription(): string
    {
        return $this->model;
    }
}