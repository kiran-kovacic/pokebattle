<?php

class Pikachu extends Pokemon
{
  public function __construct($name, $currentHealth)
  {
    $weakness = new Weakness(
        'fire',
        1.5
    );
    $resistance = new Resistance(
        'fighting',
        20
    );
    $specie = 'Pikachu';
    $hitpoints = 60;
    $moves = [new Moves('pika punch', 20), new Moves('Electric Ring', 50)];
    $energytype = new Energytype(energytype::LIGHTNING);
    parent::__construct($name, $specie, $energytype, $hitpoints, $currentHealth, $weakness, $resistance, $moves);
  }
}
