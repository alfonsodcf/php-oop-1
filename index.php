<?php
class Movie {
    public $titolo;
    public $genere;
    public $release;
    public $director;   

    function __construct ($_titolo, $_genere, $_release, $_director)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->release = $_release;
        $this->director = $_director;
    }
}

$movie1 = new Movie ('Climax', 'horror', 2019, 'Gaspar Noè');
$movie2 = new Movie ('Le Iene', 'gangster', 1992, 'Quentin Tarantino');

var_dump($movie1);
var_dump($movie2);
?>