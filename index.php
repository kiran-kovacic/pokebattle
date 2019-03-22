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

// echo $pikachu->name . '<br/>';
// echo $pikachu->specie . '<br/>';
// echo $pikachu->energytype . '<br/>';
// echo $pikachu->hitpoints . '<br/>';
// echo $pikachu->currentHealth . '<br/>';
// echo $pikachu->resistance->Resistance . '<br/>';
// echo $pikachu->weakness->Weakness . '<br/><br/>';
//
//
// echo $charmeleon->name . '<br/>';
// echo $charmeleon->specie . '<br/>';
// echo $charmeleon->energytype . '<br/>';
// echo $charmeleon->hitpoints . '<br/>';
// echo $charmeleon->currentHealth . '<br/>';
// echo $charmeleon->resistance->Resistance . '<br/>';
// echo $charmeleon->weakness->Weakness . '<br/>';

?>
<!DOCTYPE html>
<html lang="nl" dir="ltr">
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
        <button type="button" name="button1"><?= $pikachu->move1->attack ?></button>
        <button type="button" name="button2"><?= $pikachu->move2->attack ?></button>
      </section>
      <section>
        <img src="img/Charmeleon.jpg" alt="Charmeleon">
        <div class="bottom">
          <div id="top2"></div>
        </div>
        <p>Name: <?= $charmeleon->name ?><br/>Pokemon: <?= $charmeleon->specie ?></p>
        <button type="button" name="button3"><?= $charmeleon->move1->attack ?></button>
        <button type="button" name="button4"><?= $charmeleon->move2->attack ?></button>
      </section>
    </main>
  </body>
</html>
