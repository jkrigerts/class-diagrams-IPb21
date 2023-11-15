<?php

include_once "PropulsionSystem.php";

class ElectricMotor extends PropulsionSystem {
  public function work() {
    echo "Zumm, Zumm";
  }
}