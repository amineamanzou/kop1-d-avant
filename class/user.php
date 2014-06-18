<?php
class
user
{
    public $_id;
    public $_adresse_mail;
    public $_mot_de_passe;
    public $_droit; /*Bannie = 0, Membre = 1, Admin = 2*/


	/* action inscription : 0 | action connexion : 1 */
	public
        function __construct ($dbh,$adressemail,$motdepasse,$action)
        {
        	$this->_adresse_mail = $adressemail;
        	//$this->_droit = 1;
        	
        	/* On chiffre le mot de passe */
        	$this->_mot_de_passe = md5($motdepasse);
        	
        	if (!$action) {
        		$this->inscription($dbh);
        	}
        	else
        		$this->connexion($dbh);
        }
    public
        function inscription ($dbh)
        {
            require_once(getcwd().'/include/gestion_pdo.inc.php');
            require(getcwd().'/include/requetes_sql.inc.php');
            
            $retour = $this->verifier_mail($dbh,$this->_adresse_mail);
            
            if ( !$retour )
			{
            	/* Ajout d'un id d'utilisateur */
            	$stmt=$dbh->prepare($requete_sql_ajouter_user);

            	$stmt->bindValue(':adresse_mail',$this->_adresse_mail,PDO::PARAM_STR);
            	$stmt->bindValue(':mot_de_passe',$this->_mot_de_passe,PDO::PARAM_STR);
        		/* Par simplification on part du principe qu'une personne qui s'inscrit est un membre, donc elle n'a pas de droit particulier. 0 = membre | 1 = admin */
	
	            $stmt->execute();
	
	            /* La méthode lastInsertId renvoit la valeur inséré dans le dernier champs autoincrémenté*/
	            $this->_id = $dbh->lastInsertId();
	            $this->_droit = 1;
            	return 0;
            }
            else 
            {
            	return 1;
            }
        }
	public
		function verifier_mail($dbh,$nouveau_mail)
		{
			require_once(getcwd().'/include/gestion_pdo.inc.php');
            require(getcwd().'/include/requetes_sql.inc.php');
            
            $stmt=$dbh->prepare($requete_sql_verifie_user);

            $stmt->bindValue(':mail',$nouveau_mail,PDO::PARAM_STR);

            $stmt->execute();
            
            $verif=$stmt->fetchAll();

			if (empty($verif))
				return 0;
			else
				return 1;
		}
    public
        function changer_mail ($dbh,$nouveau_mail)
        {
            require_once(getcwd().'/include/gestion_pdo.inc.php');
            require(getcwd().'/include/requetes_sql.inc.php');

            $retour = $this->verifier_mail($dbh,$nouveau_mail);

			if (!$retour)
			{
				/* Modification sur la BDD */
    	        $stmt=$dbh->prepare($requete_sql_changer_usermail);
        	    
            	$stmt->bindValue(':nouveaumail',$nouveau_mail,PDO::PARAM_STR);
            	$stmt->bindValue(':id',$this->_id,PDO::PARAM_INT);
            	
            	$stmt->execute();
				
				/* Modification de l'objet */
				$this->_adresse_mail = $nouveau_mail;
				
				echo "Debug ";
				return 0;
			}
			else 
			{
				echo "Debug fail";
				return 1;
			}
        }
    public
        function changer_mdp ($dbh,$ancien_pass,$nouveau_pass)
        {
            require_once(getcwd().'/include/gestion_pdo.inc.php');
            require(getcwd().'/include/requetes_sql.inc.php');
			
			$nouveau_pass=md5($nouveau_pass);
            $ancien_pass=md5($ancien_pass);
			
            if (!strcmp($this->_mot_de_passe,$ancien_pass))
            {
	            /* Modification de l'objet */
	            $this->_mot_de_passe = $nouveau_pass;

    	        /* Modification sur la BDD */
        	    $stmt=$dbh->prepare($requete_sql_changer_usermdp);

            	$stmt->bindValue(':id',$this->_id,PDO::PARAM_INT);
            	$stmt->bindValue(':nouveaupass',$this->_mot_de_passe,PDO::PARAM_STR);

	            $stmt->execute();

    	        return 0;
    	    }
    	    else
    	    {
    	    	return 1;
    	    } 
        }
	/* return :
	 * 0 = Connexion effectué
	 * -1 = Echec de connexion (couple login mot de passe ne correspond pas)
	 * 1 = Connexion refusé (membre bannie)
	 */
	public  
        function connexion ($dbh)
        {
        	require_once(getcwd().'/include/gestion_pdo.inc.php');
            require(getcwd().'/include/requetes_sql.inc.php');
            
    		// Verification des login
        	$stmt=$dbh->prepare($requete_sql_charger_user);
            
            $stmt->bindValue(':mail',$this->_adresse_mail,PDO::PARAM_STR);
            $stmt->bindValue(':password',$this->_mot_de_passe,PDO::PARAM_STR);

            $stmt->execute();
            
            /* Recuperation dans un tableau */
            $array = $stmt->fetchAll();
            print_r($array);

            if (!empty($array))
            {
				$this->_id = $array[0][0];  
				$this->_droit = $array[0][1];
        		if ( $this->_droit == 1 ) 
        		{
        			$this->_id = $array[0][0];
        			$membre= new membre($dbh,$this);
        			echo "je suis un membre connecté";
        			echo "<pre>\n</pre>";
        			return 0;
        		}
        		else if ( $this->_droit == 2 )
        		{       		
        			$this->_id = $array[0][0];
        			$administrateur= new administrateur($dbh,$this);
        			echo "je suis un admin connecté";
        			echo "<pre>\n</pre>";
        			return 	0; 
        		}
        		else if ( $this->_droit == 0 )
        		{
        			echo "je suis un membre bannie";
        			echo "<pre>\n</pre>";
        			return -1; //instruction vide
        		}
        		else
        			; //problème de droit
        	}
        	else
        	{
				echo "je suis un invité qui n'arrive pas a se connecter";
				echo "<pre>\n</pre>";
        		return 1;
        	}
        }
}
?>
