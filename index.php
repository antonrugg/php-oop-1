<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo 
i valori delle relative proprietà -->


<?php
//classe
    include('./partials/movies.php');
    
    //istanza della classe Movie
    $ritornoAlFuturo = new Movie("Ritorno al Futuro", "Back to the future", "Robert Zemeckis", 9.99, 5);
    

    //istanza della classe Movie
    $laGrandeBellezza = new Movie("La grande bellezza", "The great beauty", "Paolo Sorrentino", 12.99, 2);
       

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
    echo('<div class="card"');
        echo('<p>' . $ritornoAlFuturo->titolo . '</p>');
        echo('<p>' . $ritornoAlFuturo->titoloOriginale . '</p>');
        echo('<p>' . $ritornoAlFuturo->regista . '</p>');
        echo('<p>' . $ritornoAlFuturo->prezzo . ' $</p>');
        echo('<p>Prezzo scontato: ' . round($ritornoAlFuturo->calculatePrice($ritornoAlFuturo->prezzo), 2) . ' $</p>');
    echo('</div>');

    echo('<div class="card"');
        echo('<p>' . $laGrandeBellezza->titolo . '</p>');
        echo('<p>' . $laGrandeBellezza->titoloOriginale . '</p>');
        echo('<p>' . $laGrandeBellezza->regista . '</p>');
        echo('<p>' . $laGrandeBellezza->prezzo . ' $</p>');
        echo('<p>Prezzo scontato: ' . round($laGrandeBellezza->calculatePrice($laGrandeBellezza->prezzo), 2) . ' $</p>');
    echo('</div>');
    ?>
    </div>
</body>
</html>