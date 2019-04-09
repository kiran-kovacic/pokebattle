<?php

class Pikachu extends Pokemon
{
  public $specie = 'Pikachu';
  public $hitpoints = 60;

  public function __construct($name, $currentHealth)
  {
    $this->weakness = new Weakness(
        'fire',
        1.5
    );
    $this->resistance = new Resistance(
        'fighting',
        20
    );
    $this->move1 = new Moves('pika punch', 20);
    $this->move2 = new Moves('Electric Ring', 50);
    $this->lighting = new Energytype('lighting');
    parent::__construct($name, $this->specie, $this->lighting, $this->hitpoints, $currentHealth, new Weakness('fire', 1.5), $this->resistance, $this->move1 , $this->move2);
  }

  // in deze functie wordt de damage en de health van pikachu berekend.
  public function attack($target, $attack)
  {
    $damage = $this->$attack->damage;
    if ($this->lighting->type === $target->weakness->name) {
      $damage = $damage * $target->weakness->multiplier;
    }
    if ($this->lighting->type === $target->resistance->name) {
      $damage = $damage - $target->resistance->reduce;
    }
    if ($damage < 0) {
      $damage = 0;
    }
    $health = $target->currentHealth - $damage;
    return $target->name . " get's " . $damage . " damage from " . $this->$attack->attack . ". His current health is now " . $health . ".</br>";
  }
}
