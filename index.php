<?php

require 'Weakness.php';
require 'Resistance.php';
require 'Attack.php';
require 'energytype.php';
require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';

$weakness_lightning = new Weakness(
  'fire',
  1.5
);

// $weaknesses = array('Fire' => 1.5, 'Water' => 2);
// $resistances = array('Lightning' => 10, 'Fighting' => 20);

$pikachu = new Pikachu(
  'pika',
  '60'
);

echo $pikachu->name . '<br/>';
echo $pikachu->specie . '<br/>';
echo $pikachu->energytype . '<br/>';
echo $pikachu->hitpoints . '<br/>';
echo $pikachu->currentHealth . '<br/>';
echo $pikachu->weakness . '<br/>';
echo $pikachu->resistance . '<br/>';
echo $weaknesses[$pikachu->weakness] . '<br/>';
echo $resistances[$pikachu->resistance] . '<br/>';
