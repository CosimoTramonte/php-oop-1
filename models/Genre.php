<?php

class Genre{
    public $genres = [];
    public $stamp;

    function __construct($_genres, $_stamp){
        $this->genres = $_genres;
        $this->stamp = $_stamp;
    }
}

?>