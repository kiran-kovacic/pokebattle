<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Pokemon</title>
  </head>
  <body>
    <?php

      // hier worden alle bestanden required.
      require 'Weakness.php';
      require 'Resistance.php';
      require 'Attack.php';
      require 'Energytype.php';
      require 'Pokemon.php';
      require 'Pikachu.php';
      require 'Charmeleon.php';

      // hier wordt het object pikachu gemaakt.
      $pikachu = new Pikachu(
        'pika',
        60
      );

      // hier wordt het object charmeleon gemaakt.
      $charmeleon = new Charmeleon(
        'melon',
        60
      );

      // hier wordt de return van de functie attack in Charmeleon ge-echo-d.
      echo $charmeleon->attack($pikachu, 1);

      // // hier wordt de return van de functie attack in Pikachu ge-echo-d.
      echo $pikachu->attack($charmeleon, 1);

    ?>
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
  </body>
</html>
