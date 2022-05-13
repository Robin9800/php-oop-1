<!--
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
-->
<?php

class Movie{
    public $name;
    public $year;
    public $img;

    function _construct($name, $_year,$_img){
        $this->name = $_name;
        $this->year = $_year;
        $this->img = $_img;
    }

    public function movieInfo(){
        return "
        <div>
            <h2>" . $this->name . "</h2>
            <p>" . $this->year . "</p>
            <img src=". $this->img .">
        </div>
    ";
    }
}

$film1 = new Movie();
$film1->name = "Jurassic Park";
$film1->year = "1993";
$film1->img = "img\Jurassic-park.jpg";

$film2 = new Movie();
$film2->name = "Avengers";
$film2->year = "2012";
$film2->img = "img\avemgers.jpg";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>OOP</title>
</head>
<body>
    <div class="container">

        <h1>MOVIES</h1>
        <div class="movies">
            <div class="movie-1">
                <?php
                    echo($film1->movieInfo());
                ?>
            </div>

            <div class="movie-2">
                <?php
                    echo($film2->movieInfo());
                ?>
            </div>

            
        </div>
    </div>

        
        
</body>
</html>