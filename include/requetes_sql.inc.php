<?php
/* requete_sql.inc.php 
 * Par souci de segmentation du code et de maintenabilité,
 * ce fichier contient toute les requetes nécessaire au projet.
 * La structure de la table est dans le fichier Export_bdd_phpMyAdmin.sql
 * */

$nom_bdd = 'kop1davant';

$requete_sql_ajouter_user = "	INSERT INTO `".$nom_bdd."`.`User`(`USER_ID`,
																`AdresseMail`,
																`Motdepasse`,
																`Droit`) 
								VALUES ( NULL , :adresse_mail , :mot_de_passe , 1 );";

$requete_sql_charger_user = "	SELECT  `User`.`USER_ID` ,  `User`.`Droit` 
								FROM  `User` 
								WHERE  `AdresseMail` =  :mail
								AND  `Motdepasse` =  :password ;";

$requete_sql_verifie_user = "	SELECT  `User`.`USER_ID` ,  `User`.`Droit` 
								FROM  `User` 
								WHERE  `AdresseMail` =  :mail ";

$requete_sql_changer_usermail = "UPDATE  `".$nom_bdd."`.`User` SET  `AdresseMail` =  :nouveaumail WHERE  `User`.`USER_ID` = :id ;";

$requete_sql_changer_usermdp = "UPDATE  `".$nom_bdd."`.`User` SET  `Motdepasse` =  :nouveaupass WHERE  `User`.`USER_ID` = :id ;";

$requete_sql_select_id = "SELECT USER_ID FROM `User` WHERE `User`.`AdresseMail` = :AdresseMail ;";

$requete_sql_select_membre = "SELECT * FROM `Membre` WHERE `Membre`.`PROFIL` = :iduser ;";

/* Précision à propos de la requete ajouter_membre. Jdev à généré une table lié à USER par le champs PROFIL. Ainsi, cette colonne est une clef étrangère du champs USER_ID de la table User. Ce qui limite nos possibilité d'attribution d'ID, ce qui n'est pas dérangeant en soit. Mais fait par contre doublon avec la colonne MEMBRE_ID */
$requete_sql_ajouter_membre = "INSERT INTO `".$nom_bdd."`.`Membre` (`MEMBRE_ID`,
																	`Nom`,
																	`Prenom`,
																	`DateDeNaissance`,
																	`CodePostale`,
																	`Departement`,
																	`Ville`,
																	`Pays`,
																	`NumPhotoProfil`,
																	`PROFIL`) 
                               VALUES (NULL,:nom,:prenom,:dateDeNaissance,:codePostale,:departement,:ville,:pays,'NULL',:id);";
              //null                 

$requete_sql_ajouter_etablissement = "INSERT INTO `".$nom_bdd."`.`Etablissement` (`ETABLISSEMENT_ID` ,
																					`Nom` ,
																					`CodePostale` ,
																					`Pays` ,
																					`Ville` ,
																					`Adresse` ,
																					`Departement`)
									VALUES (NULL , :nom, :codePostale, :pays, :ville, :adresse, :departement);";

$requete_sql_ajouter_promotion = "INSERT INTO `".$nom_bdd."`.`Promotion` (`PROMOTION_ID` ,
																			`DateDebut` ,
																			`DateFin` ,
																			`Niveau` ,
																			`POSSEDE`)
                                  VALUES (NULL,:dateDebut,:dateFin,:niveau,:id);";

$requete_sql_ajouter_groupe = "	INSERT INTO `".$nom_bdd."`.`Groupe` (`GROUPE_ID` ,
																	`Intitule` ,
																	`CONTIENT` ) 
								VALUES (NULL , :intitule, :id_promotion );";
								
$requete_sql_supprimer_groupe = "DELETE FROM `".$nom_bdd."`.`Groupe`
								WHERE `Groupe`.`Intitule` = :intitule ;";
								
$requete_sql_ajouter_categorie = "	INSERT INTO `".$nom_bdd."`.`Categorie` (`CATEGORIE_ID` ,
																			`Categorie` ) 
									VALUES (NULL , :categorie);";


?>
