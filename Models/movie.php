<?php

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