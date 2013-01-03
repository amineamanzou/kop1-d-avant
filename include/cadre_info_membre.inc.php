<?php
function
recupere_info_membre ()
{
    /* Pour le moment cette fonction renvoit un tableau de valeurs de test juste pour voir la mise en page */
    $info = array (
        "nom_profil" => $_SESSION['Nom'],
        "prenom_profil" => $_SESSION['Prenom'],
        "photo_profil" => 'photo_profil/'.$_SESSION['id'].'.jpg',
        "taille" => '100' );
        
    return $info;
}
?>
