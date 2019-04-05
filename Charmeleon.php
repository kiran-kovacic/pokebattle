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
  public function damageCalculationC($damage, $energytype, $weakness, $multiplier, $resistance, $reduce, $name, $health)
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
    $healthC = $health - $damage;
    return $name . " get's " . $damage . " damage from electric ring. His current health is now " . $healthC . ".</br>";
  }
}
