<?php
class trajet {
	private $idTrajet;
    private $conducteurID;
	private $dateAnnonce;
	private $dateTrajet;
	private $villeDepart;
	private $villeArrivee; 
    private $prix;
    private $nbPlace;
    private $etat;


function __construct($idTrajet, $conducteurID, $dateAnnonce, $dateTrajet, $villeDepart, $villeArrivee, $prix, $nbPlace, $etat) {
        //echo "<pre>$idTrajet, $conducteurID, $dateAnnonce, $dateTrajet, $villeDepart, $villeArrivee, $prix, $nbPlace</pre><br/>\n";
        $this->setIdTrajet($idTrajet);
        $this->setConducteurID($conducteurID);
        $this->setDateAnnonce($dateAnnonce);
        $this->setDateTrajet($dateTrajet);
        $this->setVilleDepart($villeDepart);
        $this->setVilleArrivee($villeArrivee);
        $this->setPrix($prix);
        $this->setNbPlace($nbPlace); 
        $this->setEtat($etat);  
    }

    function __toString() {
        return "trajet($this->getIdTrajet(), $this->getConducteurID(), $this->getDateAnnonce(), $this->getDateTrajet(), $this->getVilleDepart(), $this->getVilleArrivee(), $this->getPrix(), $this->getNbPlace() )<br/><\n";
    }
/* Les appels get */    
    function getIdTrajet() {
        return $this->idTrajet;
    }

    function getConducteurID() {
        return $this->conducteurID;
    }

    function getDateAnnonce() {
        return $this->dateAnnonce;
    }

    function getDateTrajet() {
        return $this->dateTrajet;
    }

    function getVilleDepart() {
        return $this->villeDepart;
    }

    function getHeure(){        
        return date_format($this->dateTrajet, 'H:i');
    }

    function getDate(){        
        return date_format($this->dateTrajet, 'd/m/Y');
    }

    function getVilleArrivee() {
        return $this->villeArrivee;
    }

    function getPrix() {
        return $this->prix;
    }

    function getNbPlace() {
        return $this->nbPlace;
    }

    function getEtat() {
        return $this->etat;
    }
/* Les appels set */
    function setIdTrajet($idTrajet) {
        $this->idTrajet = $idTrajet;
    }

    function setConducteurID($conducteurID) {
        $this->conducteurID = $conducteurID;
    }

    function setDateAnnonce($dateAnnonce) {
        $this->dateAnnonce = $dateAnnonce;
    }

    function setDateTrajet($dateTrajet) {    
         $this->dateTrajet = new DateTime($dateTrajet);         
    }

    function setVilleDepart($villeDepart) {
        $this->villeDepart = $villeDepart;
    }

    function setVilleArrivee($villeArrivee) {
        $this->villeArrivee = $villeArrivee;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }
    
    function setNbPlace($nbPlace) {
        $this->nbPlace = $nbPlace;
    }
    function setEtat($etat) {
        $this->etat = $etat;
    }

}
?>