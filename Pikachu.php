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
    parent::__construct($name, $this->specie, $this->lighting, $this->hitpoints, $currentHealth, $this->weakness, $this->resistance, $this->move1 , $this->move2);
  }

  // in deze functie wordt de damage en de health van pikachu berekend.
  public function damageCalculationP($damage, $energytype, $weakness, $multiplier, $resistance, $reduce, $name, $health)
  {
    if ($energytype === $weakness) {
      $damage = $damage * $multiplier;
    }
    if ($energytype === $resistance) {
      $damage = $damage - $reduce;
    }
    if ($damage < 0) {
      $damage = 0;
    }
    $healthP = $health - $damage;
    return $name . " get's " . $damage . " damage from flare. His current health is now " . $healthP . ".</br>";
  }
}
