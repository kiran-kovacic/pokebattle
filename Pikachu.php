<?php

class Pikachu extends Pokemon
{
  public $specie = 'Pikachu';
  public $hitpoints = 60;
  public $energytype = 'Lightning';
  public $weakness = 'Fire';
  public $resistance = 'Fighting';

  public function __construct($name, $currentHealth)
  {
    parent::__construct($name, $this->specie, $this->energytype, $this->hitpoints, $currentHealth, $this->weakness, $this->resistance);
  }
}
