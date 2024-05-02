<?php
class Movie
{
  public $title;
  public $director;
  public $year;
  public $genre;
  public $rating;
  public $id;

  public function __construct($title, $director, $year, $genre, $rating, $id)
  {
    $this->title = $title;
    $this->director = $director;
    $this->year = $year;
    $this->genre = $genre;
    $this->rating = $rating;
    $this->id = $id;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function getDirector()
  {
    return $this->director;
  }
  public function getYear()
  {
    return $this->year;
  }
  public function getGenre()
  {
    return $this->genre;
  }
  public function getRating()
  {
    return $this->rating;
  }
  public function getId()
  {
    return $this->id;
  }
}
