<?php
if (isset($_SESSION['id']))
{
    require(getcwd().'/include/cadre_info_membre.inc.php');

    /* On demande à Smarty de mettre le cadre pour l'utilisateur */
    $smarty->assign(array(
        "cadre_profil" => TRUE));

    $info_membre = recupere_info_membre ($_SESSION['id']);

    /* On affiche le petit cadre */
    $smarty->assign($info_membre);
}
?>
