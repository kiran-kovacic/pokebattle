<?php

class Weakness
{
  public $Weaknesses;
  public $Multiplier;

  public function __construct($Weakness, $Multiplier)
  {
    $this->Weakness = $Weakness;
    $this->Multiplier = $Multiplier;
  }
}
