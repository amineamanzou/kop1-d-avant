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

/* Attributs de la page d'Administration par défaut */
$smarty->assign(array(
    "nom_page" => 'Administration',
    "droit_admin" => 'TRUE',
    "ajouter_etablissement" => 'FALSE',
    "supprimer_etablissement" => 'FALSE')); /* Dégeu à delete une fois les méthodes de connexion terminées */

/* Si l'utilisateur à demandé à supprimer ou a ajouter, on charge le template qui va bien */
if (isset($_GET['ajouter_etablissement']))
{
    $smarty->assign(array(
        "ajouter_etablissement" => 'TRUE'));
}

if (isset($_GET['supprimer_etablissement']))
{
    $smarty->assign(array(
        "supprimer_etablissement" => 'TRUE'));
}

/* On traite le cadre d'informations de l'utilisateur */
require(getcwd().'/include/tpl_cadre_membre_smarty.inc.php');

/*Affichage de la page d'accueil */
$smarty->display(getcwd().'/template/administration.tpl');
?>
