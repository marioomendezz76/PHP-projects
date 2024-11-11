<?php
    class Animal {
        private $xip;
        private $nom;
        private $especie;
        private $dataNaixement;
        function __construct($xip, $nom, $especie, $dataNaixement){
            $this->xip = $xip;
            $this->nom = $nom;
            $this->especie = $especie;
            $this->dataNaixement = $dataNaixement;
        }
        public function getNom(){
            return $this->nom;
        }
        public function getEspecie(){
            return $this->especie;
        }
        public function getData(){
            return $this->dataNaixement;
        }
        public function setNom($nom){
            $this->nom = $nom;
        }
        public function setEspecie($especie){
            $this->especie = $especie;
        }
        public function setData($dataNaixement){
            $this->dataNaixement = $dataNaixement;
        }
        //Mètode màgic emprat si es fa un echo de l'objecte
        public function __toString(){
            return "L'animal amb xip: " . $this->xip . " es diu: " . $this->nom . ", és de l'especie: " . $this->especie . " i va neixer el:" . $this->dataNaixement;
        }
    }
        
    $animal = new Animal('1234','Tobby','Gos', '19/09/2015');
    echo $animal . "\n";
    $animal->setNom('Angeles');
    $animal->setEspecie('Gat');
    $animal->setData('20/09/2020');
    echo $animal . "\n";

?>