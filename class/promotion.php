<?php
class
promotion
{
    public	$_id;
    public	$_date_debut;
    public	$_date_fin;
    public	$_niveau;

    public
        function ajouter_promotion ($dbh,$id_etablissement_promotion)
        {
            require_once(getcwd().'/include/gestion_pdo.inc.php');
            require(getcwd().'/include/requetes_sql.inc.php');

            $stmt=$dbh->prepare($requete_sql_ajouter_promotion);

            $stmt->bindValue('dateDebut',$this->_date_debut,PDO::PARAM_STR);
            $stmt->bindValue('dateFin',$this->_date_fin,PDO::PARAM_STR);
            $stmt->bindValue('niveau',$this->_niveau,PDO::PARAM_STR);
            $stmt->bindValue('id',$id_etablissement_promotion,PDO::PARAM_INT);

            $stmt->execute();
    		
    		$this->_id = $dbh->lastInsertId();
        }
}
?>
