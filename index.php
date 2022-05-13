<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo 
i valori delle relative proprietà -->


<?php
//classe
    include('./partials/movies.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies - OOP</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="main">
    <?php
    foreach ($movies as $movie) {
        echo('<div class="card"');
        echo('<p>' . $movie->titolo . '</p>');
        echo('<p>' . $movie->titoloOriginale . '</p>');
        echo('<p>' . $movie->regista . '</p>');
        echo('<p>' . $movie->prezzo . ' $</p>');
        echo('<p>Prezzo scontato: ' . round($movie->calculatePrice($movie->prezzo), 2) . ' $</p>');
    echo('</div>');
    }
    ?>
    </div>
</body>
</html>