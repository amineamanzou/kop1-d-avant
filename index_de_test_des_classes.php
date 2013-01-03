<?php
require(getcwd().'/include/config_pdo.inc.php');
require(getcwd().'/include/gestion_pdo.inc.php');


$error_reporting=(E_ALL);
ini_set('display_errors','1');

function __autoload($name)
{
	if (file_exists('class/'.$name.'.php'))
	{
		require_once('class/'.$name.'.php');
	}
}

echo "<pre>Test des classes, Regardez phpMyAdmin pour voir si le script fonctionne.\n</pre>";
/* Connexion à la bdd par pdo */
$dbh = ouvrir_connexion_bdd (DSN1,USER1,PASSWORD1);
$dbh->SetAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_WARNING );

/* Création de l'objet user via une action d'inscription*/
$nouvel_user = new user($dbh,'beaussier.arnaud@gmail.com','azerty',0);
print_r($nouvel_user);
echo "<pre>\n</pre>";

/* Simulation d'un changement de mail */
$nouveau_mail = 'troll.arnaud@gmail.com';
$nouvel_user->changer_mail($dbh,$nouveau_mail);
print_r($nouvel_user);
echo "<pre>\n</pre>";

/* Simulation d'un changement de mot de passe */
$nouveau_pass = 'trollolololo';
$ancien_pass = 'azerty';
$nouvel_user->changer_mdp($dbh,$ancien_pass,$nouveau_pass);
print_r($nouvel_user);
echo "<pre>\n</pre>";

//-------------

/* Création de l'objet user via une action de connexion*/
$nouvel_user2 = new user($dbh,'amanzou@gmail.com','azerty',1);
// Au premier test il doit dire qu'il n'arrive pas a se connecter
print_r($nouvel_user2);
echo "<pre>\n</pre>";
unset ($nouvel_user2);
$nouvel_user2 = new user($dbh,'amanzou@gmail.com','azerty',0);
// on l'inscrit et au second c'est ce message qui doit afficher une erreur
print_r($nouvel_user2);
echo "<pre>\n</pre>";
unset ($nouvel_user2);
$nouvel_user2 = new user($dbh,'amanzou@gmail.com','azerty',1);
// on l'inscrit et au second c'est ce message qui doit afficher une erreur
print_r($nouvel_user2);
echo "<pre>\n</pre>";


//-------------


/* Création d'un objet etablissement */
$etablissement_test = new etablissement();

/* Attributs */
$etablissement_test->_nom = "IUT De Fontainebleau";
$etablissement_test->_adresse = "21 av des bois";
$etablissement_test->_code_postale = "77210";
$etablissement_test->_departement = "Seine et marne";
$etablissement_test->_pays = "France";
$etablissement_test->_ville = "Fontainebleau";

/* Simulation de l'ajout d'un etablissement et récupération de l'ID*/
$etablissement_test->creer_etablissement($dbh);
print_r($etablissement_test);
echo "<pre>\n</pre>";

//-------------

/* Creation d'un objet promotion pour simuler quelqu'un qui ajoute une promotion qui s'est déroulé dans l'objet etablissement_test */
$promotion_test = new promotion();

/* Attributs */
$promotion_test->_date_debut = '01/01/2010';
$promotion_test->_date_fin = '01/02/2010';
$promotion_test->_niveau = 'DUT';

/* Simulation de l'ajout de la promotion s'étant déroulée dans l'établissement test et récupération de l'id de la promo créée */
$promotion_test->ajouter_promotion($dbh,$etablissement_test->_id);
print_r($promotion_test);
echo "<pre>\n</pre>";

//-------------

/* Création de l'objet groupe */
$groupe_test = new groupe();

/* Attributs ... */
$groupe_test->_intitule = 'Groupe 5 et 6';

/* Création de l'objet et récupération de l'id du groupe crée */
$groupe_test_id = $groupe_test->ajouter_groupe($dbh,$promotion_test->_id);

/* Création de l'objet groupe */
$groupe_test2 = new groupe();

/* Attributs ... */
$groupe_test2->_intitule = 'Groupe 3 et 4';

/* Création de l'objet et récupération de l'id du groupe crée */
$groupe_test2->ajouter_groupe($dbh,$promotion_test->_id);
print_r($groupe_test2);
echo "<pre>\n</pre>";

/* Suppression de l'objet */
$groupe_test2->supprimer_groupe($dbh);
print_r($groupe_test2);
unset($groupe_test2);
echo "<pre>\n</pre>";

//-------------

/* Création de l'objet categorie */
$categorie_test = new categorie();

/* Attributs ... */
$categorie_test->_categorie = 'College';

/* Création de l'objet et récupération de l'id du groupe crée */
$categorie_test->ajouter_categorie($dbh);
print_r($categorie_test);
echo "<pre>\n</pre>";

/* Fermeture de la connexion à pdo */
clore_connexion_bdd ($dbh);
?>
