<?php
class
groupe
{
	public $_id;
	public  $_intitule;

	public
		function ajouter_groupe ($dbh,$id_promotion)
		{
			require_once(getcwd().'/include/gestion_pdo.inc.php');
			require(getcwd().'/include/requetes_sql.inc.php');

			/* Ajout d'un id de groupe */
            $stmt=$dbh->prepare( $requete_sql_ajouter_groupe );

            $stmt->bindValue('intitule',$this->_intitule,PDO::PARAM_STR);
            $stmt->bindValue('id_promotion',$id_promotion,PDO::PARAM_INT);

            $stmt->execute();

			/* La méthode lastInsertId renvoit la valeur inséré dans le dernier champs autoincrémenté*/
			$this->_id = $dbh->lastInsertId();
		}

	public
		function supprimer_groupe ($dbh)
		{
			require_once(getcwd().'/include/gestion_pdo.inc.php');
			require(getcwd().'/include/requetes_sql.inc.php');

			/* Supprimer l'id de groupe*/
			$stmt=$dbh->prepare( $requete_sql_supprimer_groupe );
			
			$stmt->bindValue('intitule',$this->_intitule,PDO::PARAM_STR);

			$stmt->execute();

			//__destruct ou unset je m'y perd un peu avec ces notions
		}
}
?>
