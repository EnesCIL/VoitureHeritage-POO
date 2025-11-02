<?php
final class VoitureElec extends Voiture {
    private int $_autonomie;

    public function __construct($marque, $modele, $autonomie) {
        parent::__construct($marque, $modele); 
        $this->_autonomie = $autonomie;
    }

    public function getAutonomie() {
        return $this->_autonomie;
    }

    public function setAutonomie($autonomie) {
        $this->_autonomie = $autonomie;
    }
 
     public function __toString() {
        return parent::__toString().' '. $this->_autonomie;
}
}
?>

