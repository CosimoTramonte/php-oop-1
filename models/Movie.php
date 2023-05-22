<?php

require_once __DIR__ . "/Genre.php";

class Movie {
    public $movieName;
    public $movieDuration;
    public $movieRating = 0;
    public $starString = "";
    public $genres;


    function __construct($_movieName, $_movieDuration, $_movieRating, Genre $_genres){
        $this->movieName = $_movieName;
        $this->movieDuration = $_movieDuration;
        $this->movieRating = $_movieRating;
        $this->starString = $this->setMoviesRating($_movieRating);
        $this->genres = $_genres;
    }

    public function setMoviesRating($movieRating){
        $string = "";
        for ($i=0; $i < $movieRating; $i++) {  
            $string .= "<i class='fa-solid fa-star'></i>";
        }
        return $string;
    }
}

?>