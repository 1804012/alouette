<?php
include "../donnees.inc.php";
include "../Alouette.php";

$oiseau = "Alouette";
if(!isset($_GET['qualite'])) {
    header("location:formulaire.php");
    die;
}
$oiseau = $_GET['oiseau'];

$qualite = "gentille";
if(!isset($_GET['qualite'])) {
    header("location:formulaire.php");
    die;
}
$qualite = $_GET['qualite'];


$action = "te plumerai";
if (!isset($_GET['action'])) {
    header("location:formulaire.php");
    die;
}
$action = $_GET['action'];

$membres = explode("\n", $_GET['membres']);
?><!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/alouette.css" />
		<title><?php echo Alouette::titre($oiseau, $qualite); ?></title>
	</head>
	<body>
        <div id="app">
            <?php include "../header.inc.php"; ?>
            <?php include "../footer.inc.php"; ?>
            <?php include "../menu.inc.php"; ?>
    		<div class="body">
                <h1><?php echo Alouette::titre($oiseau, $qualite); ?></h1>
                <?php echo Alouette::chanson($oiseau, $qualite, $action, $membres); ?>
            </div>
        </div>
	</body>
</html>
