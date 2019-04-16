<?php

class Pikachu extends Pokemon
{
  public $specie = 'Pikachu';
  private $hitpoints = 60;

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
    $this->moves = new Moves([['pika punch', 20],['Electric Ring', 50]]);
    $this->energytype = new Energytype('lighting');
    parent::__construct($name, $this->specie, $this->energytype, $this->hitpoints, $currentHealth, $this->weakness, $this->resistance, $this->moves);
  }
}
