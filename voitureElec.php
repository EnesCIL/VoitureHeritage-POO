<?php
 class VoitureElec{
    private string $_marque;
    private string $_modele;
    private string $_autonomie;

    public function  __construct($marque, $modele, $nbPortes){
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
    public function getAutonomie(){
    return $this->_autonomie;
    }
    public function setModele($autonomie){
        $this->_autonomie = $autonomie;
    }
}
?>
