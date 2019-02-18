
<?php
$movies = array(
  0 => array(
    "id" => 1,
    "title" => "Ocean Eleven"
  ),
  1 => array(
    "id" => 2,
    "title" => "The Departed"
  ),
  2 => array(
    "id" => 3,
    "title" => "Good Fellas"
  )
);
//var_dump($movies);
$actors = array(
  0 => array(
    "id" => 1,
    "actor" => "George Clooney",
    "movie_id" => 1
  ),
  1 => array(
    "id" => 2,
    "actor" => "Brad Pitt",
    "movie_id" => 1
  ),
  2 => array(
    "id" => 3,
    "actor" => "Leonardo Dicaprio",
    "movie_id" => 2
  ),
  3 => array(
    "id" => 4,
    "actor" => "Robert DiNero",
    "movie_id" => 1
  ),
  4 => array(
    "id" => 5,
    "actor" => "Matt Damon",
    "movie_id" => 2
  ),
  5 => array(
    "id" => 6,
    "actor" => "Matt Damon",
    "movie_id" => 1
  ),
  6 => array(
    "id" => 7,
    "actor" => "Joe Pesci",
    "movie_id" => 1
  )

);

function getTitle($movies, $movie_id){
  foreach($movies as $movie){
    if($movie["id"] == $movie_id){
      return $title = $movie["title"];
    }

  }

}

$actor_movie = array();
$i = 0;
foreach($actors as $actor){
  
  $title = getTitle($movies, $actor["movie_id"]);
  $actor["movie"] = $title;
  $actor_movie[$i] = $actor;

  $i++;
}

echo "<pre>";
  print_r($actor_movie);
echo "</pre>";
?>


