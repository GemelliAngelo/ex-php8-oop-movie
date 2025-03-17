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