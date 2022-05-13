<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo 
i valori delle relative proprietà -->


<?php
//classe
    class Movie {
        //attributi
        public $titolo;
        public $titoloOriginale;
        public $regista;
        public $sconto = 0;

        function __construct($_mediaVoti){
            $this->mediaVoti = $_mediaVoti;
            $this->setSconto($_mediaVoti);
        }

        //LE FUNZIONI NON LE POSSIAMO ESEGUIRE SULLA CLASSE, LE DOBBIAMO ESEGUIRE SULL'ISTANZA!!!
        public function setSconto($mediaVoti){
            if($mediaVoti < 3){
                $this->sconto = 20;
            }
        }

        public function getSconto(){
            return $this->sconto;
        }

        public function calculatePrice($prezzo){
            return $prezzo - ($prezzo * $this->sconto  / 100);
        }
    }



    
    //istanza della classe Movie
    $ritornoAlFuturo = new Movie(5);
    //accedo ad un attributo dell'istanza
    $ritornoAlFuturo->titolo = "Ritorno al Futuro";
    $ritornoAlFuturo->titoloOriginale = "Back to the future";
    $ritornoAlFuturo->regista = "Robert Zemeckis";
    $ritornoAlFuturo->prezzo = 9.99;

    $ritornoAlFuturo->setSconto(2);
    // $scontoRitornoAlFuturo = $ritornoAlFuturo.getSconto();

    //istanza della classe Movie
    $laGrandeBellezza = new Movie(2);
    //accedo ad un attributo dell'istanza 
    $laGrandeBellezza->titolo = "La grande bellezza";
    $laGrandeBellezza->titoloOriginale = "The great beauty";
    $laGrandeBellezza->regista = "Paolo Sorrentino";
    $laGrandeBellezza->prezzo = 12.99;
    $laGrandeBellezza->setSconto(2);
    // $scontoLaGrandeBellezza = $laGrandeBellezza.getSconto();

    // $ritornoAlFuturo->titolo = "Ritorno al Futuro";
    // $laGrandeBellezza->titolo = "La grande bellezza";
    echo('<div class="card"');
    echo('<p>' . $ritornoAlFuturo->titolo . '</p>');
    echo('<p>' . $ritornoAlFuturo->titoloOriginale . '</p>');
    echo('<p>' . $ritornoAlFuturo->regista . '</p>');
    echo('<p>' . $ritornoAlFuturo->prezzo . '</p>');
    echo('<p>Prezzo scontato: ' . round($ritornoAlFuturo->calculatePrice($ritornoAlFuturo->prezzo), 2) . '$</p>');
    echo('</div>');

    echo('<div class="card"');
    echo('<p>' . $laGrandeBellezza->titolo . '</p>');
    echo('<p>' . $laGrandeBellezza->titoloOriginale . '</p>');
    echo('<p>' . $laGrandeBellezza->regista . '</p>');
    echo('<p>' . $laGrandeBellezza->prezzo . '</p>');
    echo('<p>Prezzo scontato: ' . round($laGrandeBellezza->calculatePrice($laGrandeBellezza->prezzo), 2) . '$</p>');
    echo('</div>');

?>