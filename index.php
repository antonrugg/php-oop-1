<?php
    class Movie {
        public $titolo;
        public $titoloOriginale;
        public $regista;
        public $dataUscita;
        public $prezzo;
        public $sconto = 0;

        public function setSconto($mediaVoti, $disponibile){
            if($mediaVoti < 3 && $disponibile){
                $this->sconto = 20;
            }
        }

        public function getSconto(){
            return $this->sconto;
        }
    }

    $ritornoAlFuturo = new Movie();
    $ritornoAlFuturo->setSconto(4, true);
    $scontoRitornoAlFuturo = $ritornoAlFuturo.getSconto();

    $laGrandeBellezza = new Movie();
    $laGrandeBellezza->setSconto(2, true);
    $scontoLaGrandeBellezza = $laGrandeBellezza.getSconto();

    $ritornoAlFuturo->titolo = "Ritorno al Futuro";
    $laGrandeBellezza->titolo = "La grande bellezza";

    

?>