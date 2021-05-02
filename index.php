<?php

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'SkateBoard.php';

$bicycle = new Bicycle('blue', 8);
echo $bicycle->switchOn();
var_dump($bicycle->switchOn());


$car = new Car('yellow', 5, 'gasoline');
echo $car->switchOn();
 var_dump($car->switchOn());
