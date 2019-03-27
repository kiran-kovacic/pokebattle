<?php

class Charmeleon extends Pokemon
{

  public $specie = 'Charmeleon';
  public $hitpoints = 60;
  public $move1;
  public $move2;
  public $fire;
  public $weakness;
  public $resistance;

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

  public function damageCalculation($damage, $specie)
  {

  }
}
