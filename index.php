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
      require 'Moves.php';
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
        <p>Name: <?= $pikachu->getName() ?><br/>Pokemon: <?= $pikachu->getSpecie() ?></p>
      </section>
      <section>
        <img src="img/Charmeleon.jpg" alt="Charmeleon">
        <p>Name: <?= $charmeleon->getName() ?><br/>Pokemon: <?= $charmeleon->getSpecie() ?></p>
      </section>
    </main>
  </body>
</html>
