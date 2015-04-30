<?php

require_once("../model/membre.php");

function nav() {
  $html=<<<html
<ul class="nav nav-tabs">
  <li role="presentation"><a href="profil.php">Votre Profil</a></li>
  <li role="presentation"><a href="annonces.php">Vos Annonces</a></li>
  <li role="presentation" class="active"><a href="#">Vos réservations</a></li>
  <li role="presentation"><a href="messages.php">Messages</a></li>
  <li role="presentation"><a href="avis.php">Avis</a></li>
  <li role="presentation"><a href="modifprofil.php">Profil</a></li>
</ul>
html;
  return $html;
}

// _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
//fonction pour les trajets déjà effectués où date > date trajet
function ResPassees() {
  $html=<<<html
<p><table class="table table-striped">
<ul class='list-group'>
<li class='list-group-item list-group-item-info'>Trajets réservés réalisés</li>
      <tr>
      <th>Conducteur</th>
      <th>Conducteur</th>
      <th>Date</th>
      <th>Ville de départ</th>
      <th>Ville d'arrivée</th>
      </tr></p>
html;
  return $html;
}


// _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
//Affichage du tableau des reservations passées

function affichageRP($Prnom, $idConducteur, $date, $villeDep, $villeAr){
  $html=<<<html
    <tr><td>$Prnom
        <td>$idConducteur
        <td>$date
        <td>$villeDep
        <td>$villeAr
        <td><a href="annoncesPassagers.php" class="btn btn-primary" role="button">Donner une note au conducteur</a>
html;
  return $html;
}

// _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
//fonction pour les trajets déjà effectués où date > date trajet
function ResFutures() {
  $html=<<<html

<p><table class="table table-striped">
<ul class='list-group'>
<li class='list-group-item list-group-item-warning'>Trajets réservés à venir</li>
      <tr>
      <th>Conducteur
      <th>Conducteur</th>
      <th>Date</th>
      <th>Ville de départ</th>
      <th>Ville d'arrivée</th>
      </tr></p>
html;
  return $html;
}

// _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
//Affichage du tableau des reservations futures
function affichageRF($Prnom, $idConducteur, $date, $villeDep, $villeAr){
  $html=<<<html
    <tr><td>$Prnom
        <td>$idConducteur
        <td>$date
        <td>$villeDep
        <td>$villeAr
        <td><a href="annoncesPassagers.php" class="btn btn-primary" role="button">Donner une note au conducteur</a>
html;
  return $html;
}



// _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
//Function qui permet de fermer les tableaux ResPassees() et ResFutures()
function fin(){
  $html=<<<html
      </table>
    </li>
  </ul>
html;
  return $html;

}