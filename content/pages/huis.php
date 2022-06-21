<?php 
        class Vakantiehuizen {
            public $naam;
            public $prijs;
            public $beschrijving;
            public $personen;
            public $id;

            function __construct($naam, $prijs, $beschrijving, $personen)
            {
                $this->id = random_int(10, 10000);
                $this->naam = $naam;
                $this->prijs = $prijs;
                $this->beschrijving = $beschrijving;
                $this->personen = $personen;
            }           
        }
    ?>