<?php
/*******************************************
 * Ce fichier contient toute les fonctions *
 * pour la gestion des images.             *
 *******************************************/

/* Fonction de stockage de l'image */
function
uploader_image ($image)
{
    $dossier = 'upload/'; /* Où les fichiers images seront stocker */
    $fichier = basename($image['avatar']['name']);
    $taille_maxi = 100000;
    $taille = filesize($image['avatar']['tmp_name']);
    $extensions_autorisees = array('.jpg', '.jpeg');
    $extension_fichier = strrchr($image['avatar']['name'], '.'); 

    /* Vérifications de sécurité. */
    if(!in_array($extension_fichier, $extensions_autorisees)) /* Si l'extension n'est pas dans le tableau */
    {
        $erreur = 'Vous devez choisir un fichier de type jpg';
    }
    if($taille>$taille_maxi)
    {
        $erreur = 'Le fichier est trop gros. 100kio max';
    }
    if(!isset($erreur)) /* S'il n'y a pas d'erreur on upload */
    {
        /* Remplace les caractères spéciaux ou problématique à traiter par leur équivalent simple. */
        $fichier = strtr($fichier, 
            'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
            'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
        $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

        if(move_uploaded_file($image['avatar']['tmp_name'], $dossier.$fichier))
        {
        }
        else 
        {
            echo 'Echec de l\'upload !';
        }
    }
    else
    {
        echo $erreur;
    }
    
    /* On renvoit le nom du fichier uploadé dans le dossier temporaire */
    return $dossier.$fichier;
}

function
assigner_photo_membre ($nom_de_la_photo,$id_membre)
{
    /* On bouge l'image du dossier upload vers le dossier image_photo en modifiant son nom de manière à ce qu'il soit le même que l'id_membre. */
    if (rename ("$nom_de_la_photo","photo_profil/$id_membre.jpg") == TRUE)
    {
    }
    else
    {
        echo "Impossible d'uploader la photo. (taille_maxi = 100kio)\n";
    }    
}

?>
