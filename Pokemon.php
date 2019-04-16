<?php

class Pokemon
{
  public $name;
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

  // in deze functie wordt de damage en de health van $target berekend.
  public function attack($target, $attack)
  {
    $damage = $this->moves->attack[$attack][1];
    if ($this->energytype->type === $target->weakness->name) {
      $damage *= $target->weakness->multiplier;
    }
    if ($this->energytype->type === $target->resistance->name) {
      $damage -= $target->resistance->reduce;
    }
    if ($damage < 0) {
      $damage = 0;
    }
    $this->calculateHealth($damage, $target);
    return $target->name . " get's " . $damage . " damage from " . $this->moves->attack[$attack][0] . ". His current health is now " . $target->currentHealth . ".</br>";
  }

  private function calculateHealth($damage, $target)
  {
    $target->currentHealth -= $damage;
  }
}
