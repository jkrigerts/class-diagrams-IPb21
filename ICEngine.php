<?php

include_once "PropulsionSystem.php";

class ICEngine extends PropulsionSystem {
  public $size;
  private $cylinderCount;

  function work() {
    echo "Brumm, Brumm";
  }
}