<?php
date_default_timezone_set('UTC');
session_start();

/* Affichage des erreurs de php */
$error_reporting=(E_ALL);
ini_set('display_errors','1');

/* Inclusion du moteur de template smarty et on crée un nouvel objet Smarty. */
require(getcwd().'/include/smarty/Smarty.class.php'); 
$smarty = new Smarty();

/* Désactivation du cache */
$smarty->caching = 0;

/* Attributs du header */
require(getcwd().'/include/tpl_header_smarty.inc.php');

/* Attributs de la page d'accueil */
$smarty->assign(array(
    "chemin_illustration" => 'template/illustration_accueil.svg',
    "nom_page" => 'Accueil'));

/* On traite le cadre d'informations de l'utilisateur */
require(getcwd().'/include/tpl_cadre_membre_smarty.inc.php');

/*Affichage de la page d'accueil */
$smarty->display(getcwd().'/template/accueil.tpl');
?>
