<?php

include "Car.php";

$carParams = [
  "color" => "red",
  "brand" => "Škoda",
  "year" => 2005,
  "mileage" => 200000,
  "tireSize" => 16,
  "tirePressure" => 2.2,
  "type" => CarType::Hybrid
];

$justCar = new Car("red", "Škoda", 2005, 200000, 16, 2.2, CarType::Hybrid);

print_r($justCar);