<?php

class Charmeleon extends Pokemon
{
  public function __construct($name, $currentHealth)
  {
    $weakness = new Weakness(
        'water',
        2
    );
    $resistance = new Resistance(
        'lightning',
        10
    );
    $specie = 'Charmeleon';
    $hitpoints = 60;
    $moves = [new Moves('Head Butt', 10), new Moves('Flare', 30)];
    $energytype = new Energytype(energytype::FIRE);
    parent::__construct($name, $specie, $energytype, $hitpoints, $currentHealth, $weakness, $resistance, $moves);
  }
}
