<?php
require_once __DIR__ . '/Model/Movie.php';

$alien = new Movie('Alien', 'Ridley Scott', 1979, 'Horror', 8.5, 1);
$lordOfTheRings = new Movie('The Lord of the Rings: The Fellowship of the Ring', 'Peter Jackson', 2001, 'Adventure', 8.8, 2);
$xxx = new Movie('xXx', 'Rob Cohen', 2002, 'Action', 5.9, 3);
$viaColVento = new Movie('Via col vento', 'Victor Fleming', 1939, 'Drama', 8.1, 4);
$limitless = new Movie('Limitless', 'Neil Burger', 2011, 'Mystery', 7.4, 5);
$thewolfOfWallStreet = new Movie('The Wolf of Wall Street', 'Martin Scorsese', 2013, 'Biography', 8.2, 6);
$cloverfield = new Movie('Cloverfield', 'Matt Reeves', 2008, 'Horror', 7.0, 7);
$schindlersList = new Movie('Schindler\'s List', 'Steven Spielberg', 1993, 'Biography', 8.9, 8);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
</head>

<body>
  <div class="container">
    <h1>Lista Film</h1>
  </div>
  <div class="container">
    <ul>
      <li>
        <h2><?php echo $alien->title; ?></h2>
        <p>Regista: <?php echo $alien->director; ?></p>
        <p>Anno: <?php echo $alien->year; ?></p>
        <p>Genere: <?php echo $alien->genre; ?></p>
        <p>Voto: <?php echo $alien->rating; ?></p>
      </li>
      <li>
        <h2><?php echo $lordOfTheRings->title; ?></h2>
        <p>Regista: <?php echo $lordOfTheRings->director; ?></p>
        <p>Anno: <?php echo $lordOfTheRings->year; ?></p>
        <p>Genere: <?php echo $lordOfTheRings->genre; ?></p>
        <p>Voto: <?php echo $lordOfTheRings->rating; ?></p>
      </li>
      <li>
        <h2><?php echo $xxx->title; ?></h2>
        <p>Regista: <?php echo $xxx->director; ?></p>
        <p>Anno: <?php echo $xxx->year; ?></p>
        <p>Genere: <?php echo $xxx->genre; ?></p>
        <p>Voto: <?php echo $xxx->rating; ?></p>
      </li>
      <li>
        <h2><?php echo $viaColVento->title; ?></h2>
        <p>Regista: <?php echo $viaColVento->director; ?></p>
        <p>Anno: <?php echo $viaColVento->year; ?></p>
        <p>Genere: <?php echo $viaColVento->genre; ?></p>
        <p>Voto: <?php echo $viaColVento->rating; ?></p>
      </li>
      <li>
        <h2><?php echo $limitless->title; ?></h2>
        <p>Regista: <?php echo $limitless->director; ?></p>
        <p>Anno: <?php echo $limitless->year; ?></p>
        <p>Genere: <?php echo $limitless->genre; ?></p>
</body>

</html>