<?php
if (isset ($_SESSION['id']))
{
    /* On demande à Smarty de mettre le cadre pour l'utilisateur */
    $smarty->assign(array(
        "cadre_profil" => TRUE));
    require(getcwd().'/include/cadre_membre.inc.php');
    
    $info_membre = recupere_info_membre ($_SESSION['id']);
    $smarty->assign($info_membre);
}

?>
