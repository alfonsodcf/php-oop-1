<?php
class Movie {
    private $titolo;
    private $genere;
    private $release;
    private $director;   

    function __construct ($_titolo, $_genere, $_release, $_director)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->release = $_release;
        $this->director = $_director;
    }

    public function getTitolo()
    {
        return $this->titolo;
    }
}

$movie1 = new Movie ('Climax', 'horror', 2019, 'Gaspar Noè');
$movie2 = new Movie ('Le Iene', 'gangster', 1992, 'Quentin Tarantino');

var_dump($movie1);
var_dump($movie2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $movie1->getTitolo();?></h2>
    <h2><?php echo $movie2->getTitolo();?></h2>
</body>
</html>