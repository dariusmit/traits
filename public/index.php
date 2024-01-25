<?php

declare (strict_types = 1);

//Itraukiam composer autoloaderi
require __DIR__ . '/../vendor/autoload.php';

$regularCoffeeMaker = new App\CoffeeMaker();
$lateCoffeeMaker = new App\LatteMaker();
$cappucinoCoffeeMaker = new App\CappuccinoMaker();
$allInOneCoffeeMaker = new App\AllInOneCoffeeMaker();

echo $regularCoffeeMaker->makeCoffee() . '<br />';

echo $lateCoffeeMaker->makeCoffee();
echo $lateCoffeeMaker->makeLatte() . '<br />';

echo $cappucinoCoffeeMaker->makeCoffee();
echo $cappucinoCoffeeMaker->makeCappuccino() . '<br />';

echo $allInOneCoffeeMaker->makeCoffee();
echo $allInOneCoffeeMaker->makeLatte();
echo $allInOneCoffeeMaker->makeCappuccino() . '<br />';;

?>
