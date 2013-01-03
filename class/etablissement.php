<?php
class
etablissement
{
	public	$_id;
	public  $_nom;
	public  $_adresse;
	public  $_code_postale;
	public  $_departement;
	public  $_pays;
	public  $_ville;

	public
		function creer_etablissement ($dbh)
        {
            require_once(getcwd().'/include/gestion_pdo.inc.php');
            require(getcwd().'/include/requetes_sql.inc.php');

            /* Ajout d'un id d'utilisateur */
            $stmt=$dbh->prepare($requete_sql_ajouter_etablissement);

            $stmt->bindValue('nom',$this->_nom,PDO::PARAM_STR);
            $stmt->bindValue('codePostale',$this->_code_postale,PDO::PARAM_INT);
            $stmt->bindValue('pays',$this->_pays,PDO::PARAM_STR);
            $stmt->bindValue('ville',$this->_ville,PDO::PARAM_STR);
            $stmt->bindValue('adresse',$this->_adresse,PDO::PARAM_STR);
            $stmt->bindValue('departement',$this->_departement,PDO::PARAM_STR);

            $stmt->execute();

            /* La méthode lastInsertId renvoit la valeur inséré dans le dernier champs autoincrémenté*/
			$this->_id = $dbh->lastInsertId();
		}
}
?>
