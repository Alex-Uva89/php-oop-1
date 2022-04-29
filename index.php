<?php

class Movie
{
    private $title;
    private $cast;
    private $poster;
    private $critica;
    private $genere;
    private $direttore;
    private $scrittori;
    private $dataUscita;
    private $produzione;

    public function __construct($_title, $_cast) {
        $this->title = $_title;
        $this->cast = $_cast;
    }

    public function setTitle($_title) { 
        $this->title = $_title;
        return $this;
    }
    
    public function getTitle() { 
        return $this->title;
    }

    public function setCast($_cast) { 
        $this->cast = $_cast;
        return $this;
    }

    public function getCast() { 
        return $this->cast;
    }





}

$Movie = new Movie('ciao', 'Vigo');

echo $Movie


?>