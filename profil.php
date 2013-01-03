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

/* attributs du header */
require(getcwd().'/include/tpl_header_smarty.inc.php');

/* Test d'affichage de la page de profil */
$smarty->assign(array(
       "nom_page" => 'Profil'));

/* On traite le cadre d'informations de l'utilisateur */
require(getcwd().'/include/tpl_cadre_membre_smarty.inc.php');
$smarty->assign(array(
		    "menu_modifier" => 'FALSE'));
/* Si l'utilisateur est connecté alors on affiche sa page de profil */
if (isset ($_SESSION['id']))
{
    /* Si l'utilisteur à cliqué sur modifier alors on change la page pour permettre l'édition des champs. */
    if (isset ($_GET['modifier']))
    {
	    $smarty->assign(array(
		    "menu_modifier" => 'TRUE'));
    }
    else
    if (isset ($_POST['appliquer_modifications']))
    {
        /* Si l'utilisateur revient de la page de modification du profil */
        $smarty->assign(array(
            "message" => 'Modifications enregistrées'));
    }

    /* On traite les attributs de sessions de visualisation du profil */
    $smarty->assign(array(
        "Nom" => $_SESSION['Nom'],
        "Prenom" => $_SESSION['Prenom'],
        "DateDeNaissance" => $_SESSION['DateDeNaissance'],
        "CodePostale" => $_SESSION['CodePostale'],
        "Departement" => $_SESSION['Departement'],
        "Ville" => $_SESSION['Ville'],
        "Pays" => $_SESSION['Pays'],
        "AdresseMail" => $_SESSION['AdresseMail']));
}
/* Sinon on lui propose de se connecter. */
else
{
    $smarty->assign(array(
        "connexion" => TRUE));
}

/*Affichage de la page d'accueil */
$smarty->display(getcwd().'/template/profil.tpl');
?>
