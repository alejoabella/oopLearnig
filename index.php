<?php

require_once 'core/init.php';

$car = new Vehiculos();

$car->setPuertas(2);

echo $car->getPuertas(); // 2

$car->getMarca();

$car2 = new Coches();

$car2->setPuertas(10);

echo $car2->getPuertas(); // 10

echo $car2->getKilometraje(); // 128

echo $car2->callToProtectedFunctionSafe(); // OK PROTECTED