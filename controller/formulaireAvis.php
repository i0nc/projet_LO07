<?php

require_once("../view/header.php");
require_once("../view/menu.php");
require_once("../view/foot.php");
require_once("../view/formulaireAvis.php");
require_once("../view/messageAlerte.php");



session_start();
$file = basename(__FILE__);

$html= headerSite("formulaireAvis");
$html.= menu();
if(isset($_SESSION['membre']) && isset($_POST['idTrajet']))
{
	$html.= formulaireAvis("formulaireAvisTraitement.php", $_POST['idTrajet']);
}

$html.= foot();

echo $html;