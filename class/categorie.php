<?php
class
categorie
{
	public $_id;
	public $_categorie;

	public
		function ajouter_categorie ($dbh)
		{
			require_once(getcwd().'/include/gestion_pdo.inc.php');
			require(getcwd().'/include/requetes_sql.inc.php');

			/* Ajout d'un id de groupe */
            $stmt=$dbh->prepare( $requete_sql_ajouter_categorie );

            $stmt->bindValue('categorie',$this->_categorie,PDO::PARAM_STR);

            $stmt->execute();

			/* La méthode lastInsertId renvoit la valeur inséré dans le dernier champs autoincrémenté*/
			$this->_id = $dbh->lastInsertId();
		}
}
?>
