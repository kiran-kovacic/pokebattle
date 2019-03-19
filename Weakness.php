<?php

class Weakness
{
  public $weaknesses;
  public $multiplier;

  public function __construct($weakness, $multiplier)
  {
    $this->weakness = $weakness;
    $this->multiplier = $multiplier;
  }
}
