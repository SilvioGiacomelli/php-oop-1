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
    <h1>Movie List</h1>
    <ul>
      <li>
        <h2><?php echo $alien->getTitle(); ?></h2>
        <p>Director: <?php echo $alien->getDirector(); ?></p>
        <p>Year: <?php echo $alien->getYear(); ?></p>
        <p>Genre: <?php echo $alien->getGenre(); ?></p>
        <p>Rating: <?php echo $alien->getRating(); ?></p>
      </li>
      <li>
        <h2><?php echo $lordOfTheRings->getTitle(); ?></h2>
        <p>Director: <?php echo $lordOfTheRings->getDirector(); ?></p>
        <p>Year: <?php echo $lordOfTheRings->getYear(); ?></p>
        <p>Genre: <?php echo $lordOfTheRings->getGenre(); ?></p>
        <p>Rating: <?php echo $lordOfTheRings->getRating(); ?></p>
      </li>
      <li>
        <h2><?php echo $xxx->getTitle(); ?></h2>
        <p>Director: <?php echo $xxx->getDirector(); ?></p>
        <p>Year: <?php echo $xxx->getYear(); ?></p>
        <p>Genre: <?php echo $xxx->getGenre(); ?></p>
        <p>Rating: <?php echo $xxx->getRating(); ?></p>
      </li>
      <li>
        <h2><?php echo $viaColVento->getTitle(); ?></h2>
        <p>Director: <?php echo $viaColVento->getDirector(); ?></p>
        <p>Year: <?php echo $viaColVento->getYear(); ?></p>
        <p>Genre: <?php echo $viaColVento->getGenre(); ?></p>
        <p>Rating: <?php echo $viaColVento->getRating(); ?></p>
      </li>
      <li>
        <h2><?php echo $limitless->getTitle(); ?></h2>
        <p>Director: <?php echo $limitless->getDirector(); ?></p>
        <p>Year: <?php echo $limitless->getYear(); ?></p>
        <p>Genre: <?php echo $limitless->getGenre(); ?></p>

  </div>
</body>

</html>