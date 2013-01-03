<?php
require(getcwd().'/include/config_pdo.inc.php');
require(getcwd().'/include/gestion_pdo.inc.php');

/* Autoloader */
function my_autoloader($class) 
{
    include 'class/' . $class . '.php';
}
spl_autoload_register('my_autoloader');
    
/* Affichage des erreurs de php */
$error_reporting=(E_ALL);
ini_set('display_errors','1');

/* Connexion à la bdd par pdo */
$dbh = ouvrir_connexion_bdd (DSN1,USER1,PASSWORD1);

date_default_timezone_set('UTC');
/* On débute la session */
session_start();

/* Inclusion du moteur de template smarty */
require(getcwd().'/include/smarty/Smarty.class.php');
$smarty = new Smarty();
$smarty->caching = 0;

/* Attributs du header */
require(getcwd().'/include/tpl_header_smarty.inc.php');

/* Attributs de la page d'inscription */
$smarty->assign(array(
    "action_formulaire_inscription" => 'inscription.php',
    "action_ajouter_image" => 'validation.php',
    "redirection_profil" => FALSE,
    "inscription" => FALSE,
    "nom_page" => 'Inscription',
    "poids_max" => "100000"));

/* On traite le cadre d'informations de l'utilisateur */
require(getcwd().'/include/tpl_cadre_membre_smarty.inc.php');

/* Si l'utilisateur à rempli le formulaire, on lui demande via un autre formulaire d'hoster sa photo de profil. */
if (isset($_POST['inscription']))
{
    /* On met à jour la session avec ce que l'utilisateur à rentré dans le formulaire. */
    $_SESSION['Nom'] = $_POST['Nom'];
    $_SESSION['Prenom'] = $_POST['Prenom'];
    $_SESSION['DateDeNaissance'] = $_POST['DateDeNaissance'];
    $_SESSION['CodePostale'] = $_POST['CodePostale'];
    $_SESSION['Departement'] = $_POST['Departement'];
    $_SESSION['MotDePasse'] = $_POST['MotDePasse'];
    $_SESSION['Ville'] = $_POST['Ville'];
    $_SESSION['Pays'] = $_POST['Pays'];
    $_SESSION['AdresseMail'] = $_POST['email'];

    /* Construction de l'objet user avec les paramètre dans $_SESSION */
    $user = new user();
    $user->_id = NULL;
    $user->_adresse_mail = $_SESSION['AdresseMail'];
    $user->_mot_de_passe = $_SESSION['MotDePasse'];
    $user->_droit = 0;

    /* On récupère l'id qui servira à créer le membre dans la table */
    $user->inscription($dbh);
    $_SESSION['id_inscription'] = $user->_id;

    /* Création de l'objet du nouveau membre avec les attributs fourni par l'utilisatuer dans le formulaire d'inscription. */
    $membre = new membre($dbh,$user);
    $membre->_nom = $_SESSION['Nom'];
    $membre->_prenom = $_SESSION['Prenom'];
    $membre->_date_de_naissance = $_SESSION['DateDeNaissance'];
    $membre->_code_postale = $_SESSION['CodePostale'];
    $membre->_departement = $_SESSION['Departement'];
    $membre->_ville = $_SESSION['Ville'];
    $membre->_pays = $_SESSION['Pays'];
    $membre->_num_photo_profil = $_SESSION['id_inscription'];

    /* On rempli le profil */
    $membre->renseigne_profil ($dbh,$user);

    /* Puis on passe à la partie upload_image */
    $smarty->assign(array(
        "action_ajouter_image" => 'upload_image.php',
        "inscription" => 1));
}

/* Si l'utilisateur est déjà connecté, on lui affiche qu'il est déjà inscrit et on le redirige vers sa page de profil */
if (isset($_SESSION['id']))
{
    $smarty->assign(array(
        "redirection_profil" => TRUE,
        "erreur" => 'Vous êtes déjà connecté. Déconnectez vous si vous souhaitez enregistrer un nouveau membre. Redirection vers la page de profil...  '));
}

/*Affichage final de la page d'accueil */
$smarty->display(getcwd().'/template/inscription.tpl');

/* Fermeture de la connexion à pdo */
clore_connexion_bdd ($dbh);
?>
