<?php
class
membre
{
    public $_id;
    public $_nom;
    public $_prenom;
    public $_date_de_naissance;
    public $_code_postale;
    public $_departement;
    public $_ville;
    public $_pays;
    public $_num_photo_profil;


    public
        function __construct ($dbh, user $user) // Constructeur demandant 2 paramètres
        {
            require(getcwd().'/include/requetes_sql.inc.php');
            require_once(getcwd().'/include/gestion_pdo.inc.php');

            /* Recherche du profil */
            $stmt=$dbh->prepare($requete_sql_select_membre);

            $stmt->bindValue('iduser',$user->_id,PDO::PARAM_INT); 

            $stmt->execute();

            /* Recuperation dans un tableau */
            $array = $stmt->fetchAll();
            echo "<pre>\n</pre>";

            if (!empty($array))
            {
                echo "l'user a renseigner son profil";
                echo "<pre>\n</pre>";

                /* Edition de l'objet */
                $this->_id = $array[0][0];
                $this->_nom = $array[0][1];
                $this->_prenom = $array[0][2];
                $this->_date_de_naissance = $array[0][3];
                $this->_code_postale = $array[0][4];
                $this->_departement = $array[0][5];
                $this->_ville = $array[0][6];
                $this->_pays = $array[0][7];
                $this->_num_photo_profil = $array[0][8];

            }
            else
            {
                /* Manual hydrate |??Profile temporaire??| */
                $this->_nom = "NULL";
                $this->_prenom = "NULL";
                $this->_date_de_naissance = "NULL";
                $this->_pays = "NULL";
                $this->_code_postale = "0";
                $this->_departement = "NULL";
                $this->_ville = "NULL";
                $this->_num_photo_profil = "NULL";
            }
        }
    public
        function renseigne_profil ($dbh,user $user)
        {
            require(getcwd().'/include/requetes_sql.inc.php');
            require_once(getcwd().'/include/gestion_pdo.inc.php');

            /* Ajout du membre */
            $stmt=$dbh->prepare($requete_sql_ajouter_membre);

            $stmt->bindValue('nom',$this->_nom,PDO::PARAM_STR); 
            $stmt->bindValue('prenom',$this->_prenom,PDO::PARAM_STR); 
            $stmt->bindValue('dateDeNaissance',$this->_date_de_naissance,PDO::PARAM_STR); 
            $stmt->bindValue('codePostale',$this->_code_postale,PDO::PARAM_INT); 
            $stmt->bindValue('departement',$this->_departement,PDO::PARAM_STR); 
            $stmt->bindValue('ville',$this->_ville,PDO::PARAM_STR); 
            $stmt->bindValue('pays',$this->_pays,PDO::PARAM_STR);
            $stmt->bindValue('id',$user->_id,PDO::PARAM_INT); 

            /* Gestion de photo à implementer */

            $stmt->execute();
            
            $this->_id = $dbh->lastInsertId();
        }

    public
        function poster_photo ()
        {
        	
        }
    public
        function voir_un_profil ()
        {
        }
    public
        function rechercher_un_profil ()
        {
        }
    public
        function ajouter_parcours ()
        {
        }
}
?>
