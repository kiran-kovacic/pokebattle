<?php

class Pikachu extends Pokemon
{
  public $specie = 'Pikachu';
  public $hitpoints = 60;
  public $Move1;
  public $Move2;
  public $lighting;
  public $Weakness;
  public $resistance;

  public function __construct($name, $currentHealth)
  {
      $this->Weakness = new Weakness(
        'fire',
        1.5
    );
    $this->Resistance = new Resistance(
        'fighting',
        20
    );
      $this->Move1 = new Moves('pika punch', 20);
      $this->Move2 = new Moves('Electric Ring', 50);
      $this->lighting = new Energytype('lighting');
    parent::__construct($name, $this->specie, $this->lighting, $this->hitpoints, $currentHealth, $this->weakness, $this->resistance, $this->Move1 , $this->Move2);
  }
}
