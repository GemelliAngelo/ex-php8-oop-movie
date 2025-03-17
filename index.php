<?php

trait HasRating{
    public $rating;

    public function getRating(){
        return $this->rating;
    }

    public function setRating($_rating){
        $this->rating = $_rating;
    }
}

class Genre{
    public $name;

    public function __construct($_name){
        $this->name = $_name;
    }
}

class Movie{

    use HasRating;

    public $title;
    public $director;
    public $year;
    public $genres=[];

    public function __construct($_title, $_director, $_year, Genre $_genres){
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genres = $_genres;
    }

    public function getDirector(){
        return $this->director;
    }
}


$interstellar = new Movie('Interstellar', 'Christopher Nolan', 2014, new Genre(['Sci-Fi', 'Drama']));
$inception = new Movie('Inception', 'Christopher Nolan', 2010, new Genre(['Sci-Fi', 'Action']));

$interstellar->setRating(10);
$inception->setRating(9);

var_dump($interstellar);
var_dump($inception);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP MOVIE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>