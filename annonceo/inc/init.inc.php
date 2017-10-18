<?php
 session_start();
// Connexion à la base de donnée
$pdo = new PDO('mysql:host=localhost;dbname=annonceo', 'root', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
));

// Déclaration des variables
$contenu = '';
$msg = '';


// Constante pour les chemins des fichiers
define('RACINE_SITE','/projetcorinneyahann/annonceo/');

require('fonctions.inc.php');

?>
