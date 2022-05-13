<?php
    class Movie {
        //attributi
        public $titolo;
        public $titoloOriginale;
        public $regista;
        public $sconto = 0;

        function __construct($_titolo, $_titoloOriginale, $_regista, $_prezzo, $_mediaVoti){
            $this->titolo = $_titolo;
            $this->titoloOriginale = $_titoloOriginale;
            $this->regista = $_regista;
            $this->prezzo = $_prezzo;
            $this->mediaVoti = $_mediaVoti;
            $this->setSconto($_mediaVoti);
        }

        //LE FUNZIONI NON LE POSSIAMO ESEGUIRE SULLA CLASSE, LE DOBBIAMO ESEGUIRE SULL'ISTANZA!!!
        public function setSconto($mediaVoti){
            if($mediaVoti < 3){
                $this->sconto = 20;
            }
        }

      
        public function calculatePrice($prezzo){
            return $prezzo - ($prezzo * $this->sconto  / 100);
        }
    }
?>