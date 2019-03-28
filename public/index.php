<?php

use App\Factory\CarFactory;
use App\Entity\Car\Option\Rim;
use App\Entity\Car\Option\WarrantyExtension;

require '../vendor/autoload.php';

/**
 * Exemple d'utilisation du design pattern Decorator
 */

$passat = CarFactory::create('passat');
$passat = new Rim($passat);

echo sprintf('Modèle : %s au prix de <b>%s</b> €', $passat->getDescription(), $passat->calculatePrice()) . '<br>';

/**
 * Ajout d'une autre option
 */
$passat = new WarrantyExtension($passat);

echo sprintf('Modèle : %s au prix de <b>%s</b> €', $passat->getDescription(), $passat->calculatePrice());
