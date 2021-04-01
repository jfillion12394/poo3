<?php
require_once "HighWay.php";
require_once "MotorWay.php";
require_once "ResidentialWay.php";
require_once "PedestrianWay.php";
require_once "Vehicle.php";
require_once "Car.php";
require_once "Bike.php";
require_once "Skate.php";

//instanciations des véhicules et des voies
$car = new Car("red", 4);
$van = new Car("yellow",10);
$bike = new Bike("yellow",1);
$skate = new Skate("gold",0);
$road66 = new MotorWay(4,130);
$residential = new ResidentialWay(1,25);
$pedestrian = new PedestrianWay(1,15);

//tentatives d'ajout de véhicules sur une MotorWay
$road66->addVehicle($car);
$road66->addVehicle($van);
$road66->addVehicle($bike);
$road66->addVehicle($skate);
//tentatives d'ajout de véhicules sur une ResidienitalWay
$residential->addVehicle($car);
$residential->addVehicle($van);
$residential->addVehicle($bike);
$residential->addVehicle($skate);
//tentatives d'ajout de véhicules sur une PedestrianWay
$pedestrian->addVehicle($car);
$pedestrian->addVehicle($van);
$pedestrian->addVehicle($bike);
$pedestrian->addVehicle($skate);

//les routes de type MotorWay n'acceptent que les voitures
GetObjectCollection($road66,"MotorWay");
//les routes de type residential acceptent tous types de véhicules
GetObjectCollection($residential,"ResidentialWay");
//les routes de type pedestrian n'acceptent pas les voitures
GetObjectCollection($pedestrian,"PedestrianWay");

function GetObjectCollection(object $object, string $typeLane) {
    foreach($object->getCollection() as $vehicle)
    {
        echo "vehicle type:" .$vehicle->getType(). " allowed on ".$typeLane;
        echo PHP_EOL;
    }
}











