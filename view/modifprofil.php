<?php
//Page qui permet de modifier son profil.
//Model requis : 
require_once("../model/membre.php");

// _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
//
//fonction pour le navigateur avec la page modifprofil.php 'active'
function nav() {
$html=<<<html
<ul class="nav nav-tabs">
  <li role="presentation"><a href="profil.php">Votre Profil</a></li>
  <li role="presentation"><a href="annonces.php">Vos Annonces</a></li>
  <li role="presentation"><a href="reservations.php">Vos réservations</a></li>
  <li role="presentation"><a href="messages.php">Messages</a></li>
  <li role="presentation"><a href="avis.php">Avis</a></li>
  <li role="presentation" class="active"><a href="modifprofil.php">Profil</a></li>
</ul>
html;
  return $html;
}

// _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
//
//fonction qui affiche le titre de la page
function contenu() {
$html=<<<html
<h3>Modifiez votre profil ici :</h3>
html;
  return $html;
}
// _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
//
//fonction qui permet d'avoir accès au prénom
function prnm(){
$html=<<<html
	<form class="form-horizontal" action="modifProfilTraitement.php" method="post">
	  <div class="form-group">
	    <label for="prenom" class="col-sm-2 control-label">Votre prénom :</label>
	    <div class="col-sm-10">
	      <input type="text" name="prnm" class="form-control" id="prenom" placeholder="prenom">
	    </div>
	  </div>

	<input type="submit" class="btn btn-default btn-sm  btn-info"  value="valider"></input>

	</form>

html;
  return $html; 
}

// _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
//
//fonction qui permet d'avoir accès au nom
function nom(){
$html=<<<html
	<form class="form-horizontal" action="modifProfilTraitement.php" method="post">
	  <div class="form-group">
	    <label for="nom" class="col-sm-2 control-label">Votre nom :</label>
	    <div class="col-sm-10">
	      <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
	    </div>
	  </div>

	<input type="submit" class="btn btn-default btn-sm  btn-info"  value="valider"></input>

	</form>

html;
  return $html; 
}

// _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
//
//fonction qui permet d'avoir accès à la date de naissance
function DateNais(){
$html=<<<html
	<form class="form-horizontal" action="modifProfilTraitement.php" method="post">
	  <div class="form-group">
	    <label for="dateNais" class="col-sm-2 control-label">Votre date de naissance :</label>
	    <div class="col-sm-10">
	      <input type="date" name="dateNais" class="form-control" id="dateNais" placeholder="jj/mm/aaaa">
	    </div>
	  </div>

	<input type="submit" class="btn btn-default btn-sm  btn-info"  value="valider"></input>

	</form>

html;
  return $html; 
}

// _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
//
//fonction qui permet d'avoir accès à l'e-mail
function email(){
$html=<<<html
	<form class="form-horizontal" action="modifProfilTraitement.php" method="post">
	  <div class="form-group">
	    <label for="mail" class="col-sm-2 control-label">Votre mail :</label>
	    <div class="col-sm-10">
	      <input type="text" name="mail" class="form-control" id="mail" placeholder="nom.prenom@mail.com">
	    </div>
	  </div>

	<input type="submit" class="btn btn-default btn-sm  btn-info"  value="valider"></input>

	</form>

html;
  return $html; 
}

// _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
//
//fonction qui permet d'avoir accès au numéro de téléphone
function tel(){
$html=<<<html
	<form class="form-horizontal" action="modifProfilTraitement.php" method="post">
	  <div class="form-group">
	    <label for="tel" class="col-sm-2 control-label">Votre numéro de téléphone :</label>
	    <div class="col-sm-10">
	      <input type="text" name="tel" class="form-control" id="tel" placeholder="0689765378">
	    </div>
	  </div>

	<input type="submit" class="btn btn-default btn-sm  btn-info"  value="valider"></input>

	</form>

html;
  return $html; 
}

// _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
//
//fonction qui permet d'avoir accès au mot de passe
function password(){
$html=<<<html
	<form class="form-horizontal" action="modifProfilTraitement.php" method="post">
	<div class="form-group">
	    <label for="password" class="col-sm-2 control-label">Votre mot de passe :</label>
	    <div class="col-sm-10">
	      <input type="pass" name="pass" class="form-control" id="pass" placeholder="*******">
	    </div>
	</div>

	<div id="formPass2" class="form-group">
		    <label for="inputPassword2" class="col-sm-2 control-label">Confirmation</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="inputPassword2" placeholder="Confirmation mot de passe">
		    </div>
		  </div>
	<input type="submit" class="btn btn-default btn-sm  btn-info"  value="valider"></input>
	</form>


html;
  return $html; 
}

?>