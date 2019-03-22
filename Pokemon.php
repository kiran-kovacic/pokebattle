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
  public $move1;
  public $move2;

  public function __construct($name, $specie, $energytype, $hitpoints,
                              $currentHealth, $weakness, $resistance,
                                $move1, $move2)
  {
    $this->name = $name;
    $this->specie = $specie;
    $this->energytype = $energytype;
    $this->hitpoints = $hitpoints;
    $this->currentHealth = $currentHealth;
    $this->weakness = $weakness;
    $this->resistance = $resistance;
    $this->move1 = $move1;
    $this->move2 = $move2;
  }
}
