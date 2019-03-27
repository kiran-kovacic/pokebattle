<?php

echo '<link rel="stylesheet" href="style.css">';

require 'Weakness.php';
require 'Resistance.php';
require 'Attack.php';
require 'energytype.php';
require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';

$pikachu = new Pikachu(
  'pika',
  60
);

$charmeleon = new Charmeleon(
  'melon',
  60
);
function pokemonBattle($damageC, $energytypeC, $damageP, $energytypeP)
{
  echo "hello world";
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pokemon</title>
  </head>
  <body>
    <main>
      <section>
        <img src="img/pikachu_big.png" alt="Pikachu">
        <div class="bottom">
          <div id="top1"></div>
        </div>
        <p>Name: <?= $pikachu->name ?><br/>Pokemon: <?= $pikachu->specie ?></p>
      </section>
      <section>
        <img src="img/Charmeleon.jpg" alt="Charmeleon">
        <div class="bottom">
          <div id="top2"></div>
        </div>
        <p>Name: <?= $charmeleon->name ?><br/>Pokemon: <?= $charmeleon->specie ?></p>
      </section>
    </main>
    <form action="pokemonBattle(<?= $charmeleon->move2->damage ?>, <?= $charmeleon->energytype->type ?>, <?= $pikachu->move2->damage ?>, <?= $pikachu->energytype->type ?>)" method="post">
      <input type="submit" name="fight" value="FIGHT!">
    </form>
  </body>
</html>
