<?php

class Charmeleon extends Pokemon
{
  public $specie = 'Charmeleon';
  public $hitpoints = 60;

  public function __construct($name, $currentHealth)
  {
    $this->weakness = new Weakness(
        'water',
        2
    );
    $this->resistance = new Resistance(
        'lighting',
        10
    );
    $this->move1 = new Moves('Head Butt', 10);
    $this->move2 = new Moves('Flare', 30);
    $this->fire = new Energytype('fire');
    parent::__construct($name, $this->specie, $this->fire, $this->hitpoints, $currentHealth, $this->weakness, $this->resistance, $this->move1 , $this->move2);
  }

  // in deze functie wordt de damage en de health van charmeleon berekend.
  public function attack($target, $attack)
  {
    $damage = $this->$attack->damage;
    if ($this->fire->type === $target->weakness->name) {
      $damage = $damage * $target->weakness->multiplier;
    }
    if ($this->fire->type === $target->resistance->name) {
      $damage = $damage - $target->resistance->reduce;
    }
    if ($damage < 0) {
      $damage = 0;
    }
    $health = $target->currentHealth - $damage;
    return $target->name . " get's " . $damage . " damage from " . $this->$attack->attack . ". His current health is now " . $health . ".</br>";
  }
}
