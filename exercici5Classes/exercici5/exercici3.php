<?php
    class Animal {
        private $xip;
        private $nom;
        private $dataNaixement;
        function __construct($xip, $nom, $dataNaixement){
            $this->xip = $xip;
            $this->nom = $nom;
            $this->dataNaixement = $dataNaixement;
        }
        public function getNom(){
            return $this->nom;
        }
        public function getData(){
            return $this->dataNaixement;
        }
        public function setNom($nom){
            $this->nom = $nom;
        }
        public function setData($dataNaixement){
            $this->dataNaixement = $dataNaixement;
        }
        //Mètode màgic emprat si es fa un echo de l'objecte
        public function __toString(){
            return "L'animal amb xip: " . $this->xip . " es diu: " . $this->nom . " i va neixer el:" . $this->dataNaixement;
        }
    }
    class Gat extends Animal{
        private $raza = '';
        function __construct($xip, $nom, $dataNaixement, $raza){
        parent::__construct($xip, $nom, $dataNaixement);
        $this->raza = $raza;
        }
        public function getRaza(){
        return $this->raza;
        }
        public function setRaza($raza){
        $this->raza = $raza;
        }
        public function __toString(){
        return "Nom: " . $this->getNom() . " raza: " . $this->getraza();
        }
    }
        
    $gat = new Gat('4567','Juana','06/10/2010', 'Gat comú europeu');
    echo "$gat\n";
    $gat->setNom('Pepa');
    $gat->setRaza('Gat cartujo');
    echo "$gat\n";

    class Lleo extends Animal{
        private $mandibula = '';
        function __construct($xip, $nom, $dataNaixement, $mandibula){
        parent::__construct($xip, $nom, $dataNaixement);
        $this->mandibula = $mandibula;
        }
        public function getMandibula(){
        return $this->mandibula;
        }
        public function setMandibula($mandibula){
        $this->mandibula = $mandibula;
        }
        public function __toString(){
        return "Nom: " . $this->getNom() . " mandibula: " . $this->getMandibula();
        }
    }
        
    $lleo = new Lleo('6475','Simba','16/05/1998', '50cm');
    echo "$lleo\n";
    $lleo->setData('31/12/1998');
    $lleo->setMandibula('25cm');
    echo "$lleo\n";
?>