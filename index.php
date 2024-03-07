<?php
class Movie
{
    public $nome;
    public $genere;
    public $image;

    public function __construct($_nome, $_genere, $_image)
    {
        $this->nome = $_nome;
        $this->genere = $_genere;
        $this->image = $_image;
    }
}

$Movie1 = new Movie('Harry Potter e il calice di fuoco', 'fantascienza', 'https://m.media-amazon.com/images/M/MV5BZGUyODc4ODQtYzY3MC00Y2YyLWEzNzgtYzc4NDFhMDdkMzI3XkEyXkFqcGdeQXVyMzU5ODEzMDU@._V1_FMjpg_UX1000_.jpg');
$Movie2 = new Movie('Shutter Island', 'thriller', 'https://m.media-amazon.com/images/M/MV5BYzhiNDkyNzktNTZmYS00ZTBkLTk2MDAtM2U0YjU1MzgxZjgzXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg');




?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body style="height: 100vh" class="p-5 pt-5 text-light d-flex align-items-center">
    <div style="width: 100%; height: 10%" class="d-flex justify-content-around align-items-center">
        <div style="width: 20%;">
            <img style="width: 100%;" src="<?php echo $Movie1->image ?>" alt="">
            <p class="pt-4"> Titolo: <?php echo $Movie1->nome ?> </p>
            <p> Genere: <?php echo $Movie2->genere ?> </p>
    
        </div>
        <div style="width: 20%;">
            <img style="width: 100%;" src="<?php echo $Movie2->image ?>" alt="">
            <p class="pt-4"> Titolo: <?php echo $Movie2->nome ?> </p>
            <p> Genere: <?php echo $Movie2->genere ?> </p>
    
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>