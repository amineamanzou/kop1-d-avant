<?php
session_start();
date_default_timezone_set('UTC');

/* Affichage des erreurs de php */
$error_reporting=(E_ALL);
ini_set('display_errors','1');

/* Inclusion du moteur de template smarty et on crée un nouvel objet Smarty. */
require(getcwd().'/include/smarty/Smarty.class.php'); 
/* Inclusion du fichier de la lib de gestion des images*/
require(getcwd().'/include/gestion_image.inc.php');
$smarty = new Smarty();

/* Désactivation du cache */
$smarty->caching = 0;

/* Attributs du header */
require(getcwd().'/include/tpl_header_smarty.inc.php');

/* Affichage de la page d'upload d'image*/
$smarty->assign(array(
    "nom_page" => 'Upload Image'));

if (!isset ($_SESSION['id_inscription']))
{
    $smarty->assign(array(
        "erreur" => TRUE));
}

if (isset ($_POST['envoyer_photo_profil']))
{
    /* récupération de l'id du membre en cours de création afin de renommmé l'image en fonction de son id. */
    $id_membre = $_SESSION['id_inscription'];

    /* On récupère le nom temporaire de l'image dans le dossier tmp de php (voir php.ini) */
    $nom_temporaire = uploader_image($_FILES);
    
    /* Puis on renomme en fonction de l'id du membre (nom de la photo de profil = id_membre.jpg) */
    assigner_photo_membre($nom_temporaire,$id_membre);

    $smarty->assign(array(
        "taille_carre" => '200',
        "chemin_vers_photo_uploadee" => "photo_profil/$id_membre.jpg",
        "message" => 'l\'image à été correctement uploadée.',
        "erreur" => FALSE));
}
else
{
    $smarty->assign(array(
        "erreur" => TRUE,
        "message" => 'Veuillez commencer le formulaire d\'inscription avant de choisir une photo de profil.'));
}

/*Affichage de la page upload image */
$smarty->display(getcwd().'/template/upload_image.tpl');
?>
