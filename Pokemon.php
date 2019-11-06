<?php

class Pokemon
{
  private $name;
  private $specie;
  private $energytype;
  private $hitpoints;
  private $currentHealth;
  private $weakness;
  private $resistance;
  private $moves;

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

  public function getName()
  {
    return $this->name;
  }

  public function getSpecie()
  {
    return $this->specie;
  }

  // in deze functie wordt de damage en de health van $target berekend.
  public function attack($target, $attack)
  {
    $damage = $this->moves[$attack]->damage;
    if ($this->energytype->type === $target->weakness->name) {
      $damage *= $target->weakness->multiplier;
    }
    if ($this->energytype->type === $target->resistance->name) {
      $damage -= $target->resistance->reduce;
    }
    if ($damage < 0) {
      $damage = 0;
    }
    $target->calculateHealth($damage);
    return $target->name . " get's " . $damage . " damage from " . $this->moves->attack[$attack][0] . ". His current health is now " . $target->currentHealth . ".</br>";
  }

  // hier wordt currentHealth geupdate van de target.
  private function calculateHealth($damage)
  {
    $this->currentHealth -= $damage;
  }
}
