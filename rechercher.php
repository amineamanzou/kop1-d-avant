<?php
session_start();
date_default_timezone_set('UTC');

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

/* Attributs de la page rechercher */
$smarty->assign(array(
    "nom_page" => 'Rechercher',
    "chemin_rechercher" => 'rechercher.php',
    "niveau_formulaire" => 'FALSE',
    "departement_formulaire" => 'FALSE',
    "ville_formulaire" => 'FALSE',
    "etablissement_formulaire" => 'FALSE',
    "pays_formulaire" => 'FALSE',
    "affichage_resultat_formulaire" => 'FALSE',
    "date_formulaire" => 'FALSE',
    "resultat_requete" => NULL));

/* Gestion de l'arborescence du formulaire en formant une session au fur et à mesure de l'avancement dans le formulaire. */

/* PAYS */
if (isset($_GET['Pays']))
{
    /* On demande à Smarty de généré la prochaine page du formulaire. */
    $smarty->assign(array(
        "niveau_formulaire" => 'TRUE'));
    /* On assigne dans la session ce que l'utilisateur à fourni dans le précédent formulaire. */
    $_SESSION['Pays'] = $_GET['Pays'];
}

/* NIVEAU */
if (isset($_GET['Niveau']))
{
    /* On demande à Smarty de généré la prochaine page du formulaire. */
    $smarty->assign(array(
        "departement_formulaire" => 'TRUE'));
    /* On assigne dans la session ce que l'utilisateur à fourni dans le précédent formulaire. */
    $_SESSION['Niveau'] = $_GET['Niveau'];
}

/* DEPARTEMENT */
if (isset($_GET['Departement']))
{
    /* On demande à Smarty de généré la prochaine page du formulaire. */
    $smarty->assign(array(
        "ville_formulaire" => 'TRUE'));
    /* On assigne dans la session ce que l'utilisateur à fourni dans le précédent formulaire. */
    $_SESSION['Departement'] = $_GET['Departement'];
}

/* VILLE */
if (isset($_GET['Ville']))
{
    /* On demande à Smarty de généré la prochaine page du formulaire. */
    $smarty->assign(array(
        "etablissement_formulaire" => 'TRUE'));
    /* On assigne dans la session ce que l'utilisateur à fourni dans le précédent formulaire. */
    $_SESSION['Ville'] = $_GET['Ville'];
}

/* ETABLISSEMENT */
if (isset($_GET['Etablissement']))
{
    /* On demande à Smarty de généré la prochaine page du formulaire. */
    $smarty->assign(array(
        "date_formulaire" => 'TRUE'));
    /* On assigne dans la session ce que l'utilisateur à fourni dans le précédent formulaire. */
    $_SESSION['Etablissement'] = $_GET['Etablissement'];
}

/* DATE */
if (isset($_GET['Date']))
{
    /* On demande à Smarty de généré la prochaine page du formulaire. */
    $smarty->assign(array(
        "affichage_resultat_formulaire" => 'TRUE'));
    /* On assigne dans la session ce que l'utilisateur à fourni dans le précédent formulaire. */
    $_SESSION['Debut'] = $_GET['Debut'];
    $_SESSION['Fin'] = $_GET['Fin'];
}

/* AFFICHAGE RESULTAT */
if (isset($_GET['Date']))
{
    /* On demande à Smarty de généré la prochaine page du formulaire. */
    $smarty->assign(array(
        "affichage_resultat_formulaire" => 'TRUE'));
    /* On assigne dans la session ce que l'utilisateur à fourni dans le précédent formulaire. */
    $_SESSION['Date'] = $_GET['Date'];
    
    $smarty->assign(array(
        "resultat_requete" => $_SESSION));

    print_r($_SESSION);
}


/* On traite le cadre d'informations de l'utilisateur */
require(getcwd().'/include/tpl_cadre_membre_smarty.inc.php');

/*Affichage de la page rechercher */
$smarty->display(getcwd().'/template/rechercher.tpl');
?>
