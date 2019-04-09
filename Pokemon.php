<?php

class Pokemon
{
  public $name;
  public $specie;
  public $energytype;
  public $hitpoints;
  public $currentHealth;
  public $weakness;
  public $resistance;
  public $moves;

  public function __construct($name, $specie, $energytype, $hitpoints,
                              $currentHealth, $weakness, $resistance,
                                $moves)
  {
    $this->name = $name;
    $this->specie = $specie;
    $this->energytype = $energytype;
    $this->hitpoints = $hitpoints;
    $this->currentHealth = $currentHealth;
    $this->weakness = $weakness;
    $this->resistance = $resistance;
    $this->moves = $moves;
  }
}
