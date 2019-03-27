<?php

class Pikachu extends Pokemon
{
  public $specie = 'Pikachu';
  public $hitpoints = 60;
  public $move1;
  public $move2;
  public $lighting;
  public $weakness;
  public $resistance;

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

  public function damageCalculationP($damage, $energytype)
  {
    if ($energytype === $weakness->name) {
      $damage = $damage * $weakness->multiplier;
    }
    if ($energytype === $resistance->name) {
      $damage = $damage - $resistance->reduce;
    }
    if ($damage < 0) {
      $damage = 0;
    }
    echo $damage;
  }
}
