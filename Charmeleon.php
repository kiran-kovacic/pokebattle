<?php

class Charmeleon extends Pokemon
{
  private $specie = 'Charmeleon';
  private $hitpoints = 60;

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
    $this->moves = new Moves([['Head Butt', 10],['Flare', 30]]);
    $this->energytype = new Energytype('fire');
    parent::__construct($name, $this->specie, $this->energytype, $this->hitpoints, $currentHealth, $this->weakness, $this->resistance, $this->moves);
  }
}
