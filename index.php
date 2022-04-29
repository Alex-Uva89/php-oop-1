<?php

class Movie
{
    private $id;
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

    public function setGenere($_genere) { 
        $this->genere = $_genere;
        return $this;
    }

    public function getGenere() { 
        return $this->genere;
    }

    public function setCritica($_critica) { 
        $this->critica = $_critica;
        return $this;
    }

    public function getCritica() { 
        return $this->critica;
    }


}

$movie = new Movie('ciao', 'Vigo');
// var_dump($Movie);

$movie->setTitle('Il signore degli anelli')->setCast('Vigo Mortensen')->setGenere('Fantasy')->setCritica('8/10');

?>

<body>
    <div class="container">
        <h1>
            <?= $movie->getTitle();?>
        </h1>
        <div class="genere">
            Genere: <?= $movie->getGenere();?>
        </div>
        <div class="box">
            <span class="box-critica">
                critica: <?= $movie->getCritica();?>
            </span>
            <span class="box-cast">
                <?= $movie->getCast();?>
            </span>
        </div>
    </div>
</body>

<style>

.container{
    width: 400px;
    margin: 0 auto;
    border: 2px solid black;
}
h1{
    display: flex;
    justify-content: center;
    border: 2px solid black;
    margin: 1rem;
}
.genere{
    display: flex;
    justify-content: center;
    border: 2px solid black;
    margin: 1rem;
}
.box{
    display: flex;
    margin: 1rem;
    justify-content: space-between;
    border: 1px solid black;
}

.box .box-critica{
    width: 100%;
    padding-left: .5rem;
    border: 1px solid black;
}

.box .box-cast{
    width: 100%;
    padding-left: .5rem;
    border: 1px solid black;
}
</style>

