<?php /* Smarty version Smarty-3.1.8, created on 2012-06-06 14:15:39
         compiled from "template/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3460131644fcf0ca05830f6-61616250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '435d10930e41bb21c503ce88a0dfdada07016644' => 
    array (
      0 => 'template/header.tpl',
      1 => 1338992101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3460131644fcf0ca05830f6-61616250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fcf0ca05b51a9_32738001',
  'variables' => 
  array (
    'langage' => 0,
    'charset' => 0,
    'contenu_description' => 0,
    'nom_auteurs' => 0,
    'chemin_css' => 0,
    'titre_page' => 0,
    'chemin_mascotte' => 0,
    'message_secondaire' => 0,
    'cadre_profil' => 0,
    'nom_profil' => 0,
    'prenom_profil' => 0,
    'photo_profil' => 0,
    'taille' => 0,
    'nom_page' => 0,
    'chemin_accueil' => 0,
    'chemin_inscription' => 0,
    'chemin_profil' => 0,
    'chemin_rechercher' => 0,
    'chemin_connexion' => 0,
    'droit_admin' => 0,
    'chemin_administration' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fcf0ca05b51a9_32738001')) {function content_4fcf0ca05b51a9_32738001($_smarty_tpl) {?><!DOCTYPE html>  
<html lang="<?php echo $_smarty_tpl->tpl_vars['langage']->value;?>
">  
    <head>  
        <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['contenu_description']->value;?>
" />
        <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['nom_auteurs']->value;?>
">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['chemin_css']->value;?>
" />  
        <title><?php echo $_smarty_tpl->tpl_vars['titre_page']->value;?>
</title> 
    </head> 

    <body> 
        <header id="hd1">
        <object class="mascotte-logo" type="image/svg+xml" data="<?php echo $_smarty_tpl->tpl_vars['chemin_mascotte']->value;?>
">
            <p>Votre navigateur ne supporte pas le SVG, mettez le à jour.</p>
        </object>

        <hgroupe >
        <h1><?php echo $_smarty_tpl->tpl_vars['contenu_description']->value;?>
</h1>       
        <h2><?php echo $_smarty_tpl->tpl_vars['message_secondaire']->value;?>
</h2>
        </hgroupe>
        <?php if (isset($_smarty_tpl->tpl_vars['cadre_profil']->value)){?>
        <h3>
            <p><?php echo $_smarty_tpl->tpl_vars['nom_profil']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['prenom_profil']->value;?>
</p>
            <photo>
            <p><img src=<?php echo $_smarty_tpl->tpl_vars['photo_profil']->value;?>
 height=<?php echo $_smarty_tpl->tpl_vars['taille']->value;?>
 width=<?php echo $_smarty_tpl->tpl_vars['taille']->value;?>
 alt='Vous' ></p>
            </photo>
            <a href="deconnexion.php">Déconnexion</a>
        </h3>
        <?php }?>
        <h4><?php echo $_smarty_tpl->tpl_vars['nom_page']->value;?>
</h4>
        </header>
        <nav>
        <a class=nav_lien href="<?php echo $_smarty_tpl->tpl_vars['chemin_accueil']->value;?>
" >Accueil</a>
        <a class=nav_lien href="<?php echo $_smarty_tpl->tpl_vars['chemin_inscription']->value;?>
" >Inscription</a>
        <a class=nav_lien href="<?php echo $_smarty_tpl->tpl_vars['chemin_profil']->value;?>
" >Profil</a>
        <a class=nav_lien href="<?php echo $_smarty_tpl->tpl_vars['chemin_rechercher']->value;?>
" >Rechercher</a>
        <a class=nav_lien href="<?php echo $_smarty_tpl->tpl_vars['chemin_connexion']->value;?>
" >Connexion</a>
        <?php if ($_smarty_tpl->tpl_vars['droit_admin']->value=='TRUE'){?>
        <a class=nav_lien href="<?php echo $_smarty_tpl->tpl_vars['chemin_administration']->value;?>
" >Administration</a>
        <?php }?>
        </nav>
        <section>
<?php }} ?>