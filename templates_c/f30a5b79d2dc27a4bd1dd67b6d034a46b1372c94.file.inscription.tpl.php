<?php /* Smarty version Smarty-3.1.8, created on 2012-06-06 07:54:10
         compiled from "/srv/http/kop1-d-avant/template/inscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13443227454fcf0ca284eb31-67193182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f30a5b79d2dc27a4bd1dd67b6d034a46b1372c94' => 
    array (
      0 => '/srv/http/kop1-d-avant/template/inscription.tpl',
      1 => 1338933392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13443227454fcf0ca284eb31-67193182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chemin_header' => 0,
    'redirection_profil' => 0,
    'erreur' => 0,
    'inscription' => 0,
    'action_ajouter_image' => 0,
    'poids_max' => 0,
    'action_formulaire_inscription' => 0,
    'chemin_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fcf0ca28974a0_93852096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fcf0ca28974a0_93852096')) {function content_4fcf0ca28974a0_93852096($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['redirection_profil']->value==1){?>
<meta http-equiv="refresh" content="5;url=profil.php" />
<p><?php echo $_smarty_tpl->tpl_vars['erreur']->value;?>
</p>
<?php }elseif($_smarty_tpl->tpl_vars['inscription']->value==1){?>
<form method="POST" 
      action="<?php echo $_smarty_tpl->tpl_vars['action_ajouter_image']->value;?>
" 
      enctype="multipart/form-data">
      <fieldset>
     <!-- Limite du fichier à <?php echo $_smarty_tpl->tpl_vars['poids_max']->value;?>
octets maxim -->
     <input type="hidden" name="MAX_FILE_SIZE" value=<?php echo $_smarty_tpl->tpl_vars['poids_max']->value;?>
> 
     <p><label> Fichier : <input type="file" name="avatar"></label></p>
     <p><?php echo $_smarty_tpl->tpl_vars['poids_max']->value;?>
 octets maximum, jpg uniquement</p>
     <input type="submit" name="envoyer_photo_profil" value="Envoyer le fichier">
     </fieldset>
</form>
<?php }else{ ?>
<form action="<?php echo $_smarty_tpl->tpl_vars['action_formulaire_inscription']->value;?>
"
      method="post"
      enctype="application/w-www-form-urlencoded">
    <fieldset> 
    <legend> Inscription </legend>
    <p><label> Email <input id=email name=email type=email maxlength=40 placeholder="ex : arnaud@chezwam.net" required autofocus></label></p>
    <p><label> Mot de passe <input id="MotDePasse" name=MotDePasse maxlength=20 type="password" placeholder="votre mot de passe" required></label></p>
    <p><label> Nom <input id=Nom name=Nom maxlength=20  placeholder="ex : Dupond" required></label></p>
    <p><label> Prenom <input id=Prenom name=Prenom maxlength=20  placeholder="ex : Axel" required></label></p>
    <p><label> DateDeNaissance <input id=DateDeNaissance type=date name=DateDeNaissance maxlength=20  placeholder="ex : Axel" required></label></p>
    <p><label> Civilité <input type=radio name="genre" value="homme"> Homme </label>
       <label>          <input type=radio name="genre" value="femme"> Femme </label></p>
    <p><label> Ville <input id=Ville name=Ville type=cityname  placeholder="ex : Paris" required></label></p>
    <p><label> Pays <input id=Pays name=Pays placeholder="ex : France" required></label></p>
    <p><label> Departement <input id=Departement name=Departement placeholder="ex : Seine-St-Denis" required></label></p>
    <p><label> CodePostale <input id=CodePostale name=CodePostale placeholder="ex : 93330" required></label></p>
    <legend> </legend>
    <button type=submit name="inscription">Inscription</button>
    </fieldset>
</form>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>