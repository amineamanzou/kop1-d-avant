<?php
session_start();

/* Affichage des erreurs de php */
$error_reporting=(E_ALL);
ini_set('display_errors','1');

session_destroy();
unset($_SESSION);

/* Inclusion du moteur de template smarty et on crée un nouvel objet Smarty. */
require(getcwd().'/include/smarty/Smarty.class.php'); 
$smarty = new Smarty();

/* Désactivation du cache */
$smarty->caching = 0;

/* Attributs du header */
require(getcwd().'/include/tpl_header_smarty.inc.php');

/* Attributs de la page de déconnexion */
$smarty->assign(array(
    "chemin_mascotte_bye" => 'template/mascotte_bye.svg',
    "nom_page" => 'Aurevoir ! :)'));

$smarty->display(getcwd().'/template/deconnexion.tpl');
?>
