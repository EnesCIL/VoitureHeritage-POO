<?php
class Voiture{
    private string $_marque;
    private string $_modele;

class VoitureElec extends Voiture{
        private $_autonomie;
    public function __construct($data, $autonomie){
    parent::__construct($data);
    $this->_autonomie = $autonomie;
}
}

    public function  __construct($marque, $modele){
        $this->_marque = $marque;
        $this->_modele = $modele;   
    }
    public function getMarque(){
    return $this->_marque;
    }
    public function setMarque($marque){
        $this->_marque = $marque;
    }
    public function getModele(){
    return $this->_modele;
    }
    public function setModele($modele){
        $this->_modele = $modele;
    }
}
?>
