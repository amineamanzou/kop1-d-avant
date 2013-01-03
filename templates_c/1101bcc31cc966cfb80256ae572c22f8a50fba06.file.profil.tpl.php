<?php /* Smarty version Smarty-3.1.8, created on 2012-06-06 13:39:14
         compiled from "/srv/http/kop1-d-avant/template/profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10575362994fcf0cb2c55722-59418789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1101bcc31cc966cfb80256ae572c22f8a50fba06' => 
    array (
      0 => '/srv/http/kop1-d-avant/template/profil.tpl',
      1 => 1338989952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10575362994fcf0cb2c55722-59418789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fcf0cb2cb3eb6_11954294',
  'variables' => 
  array (
    'chemin_header' => 0,
    'menu_modifier' => 0,
    'Nom' => 0,
    'Prenom' => 0,
    'DateDeNaissance' => 0,
    'CodePostale' => 0,
    'Departement' => 0,
    'Ville' => 0,
    'Pays' => 0,
    'AdresseMail' => 0,
    'connexion' => 0,
    'message' => 0,
    'chemin_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fcf0cb2cb3eb6_11954294')) {function content_4fcf0cb2cb3eb6_11954294($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['menu_modifier']->value=='TRUE'){?>
<form id="form_modifications" action="profil.php" method="post">
<button type=submit name="appliquer_modifications">Valider / Retourner à votre profil</button>
<fieldset>
<legend>Modifier vos informations</legend>    
<p><label>Nom : </label><input type="text" name="Nom" value=<?php echo $_smarty_tpl->tpl_vars['Nom']->value;?>
 /></p>
<p><label>Prenom : </label><input type="text" name="Prenom" value=<?php echo $_smarty_tpl->tpl_vars['Prenom']->value;?>
 /></p>
<p><label>Date de naissance : </label><input type="text" name="DateDeNaissance" value=<?php echo $_smarty_tpl->tpl_vars['DateDeNaissance']->value;?>
 /></p>
<p><label>CodePostale : </label><input type="text" name="CodePostale" value=<?php echo $_smarty_tpl->tpl_vars['CodePostale']->value;?>
 /></p>
<p><label>Departement : </label><input type="text" name="Departement" value=<?php echo $_smarty_tpl->tpl_vars['Departement']->value;?>
 /></p>
<p><label>Ville : </label><input type="text" name="Ville" value=<?php echo $_smarty_tpl->tpl_vars['Ville']->value;?>
 /></p>
<p><label>Pays : </label><input type="text" name="Pays" value=<?php echo $_smarty_tpl->tpl_vars['Pays']->value;?>
 /></p>
<p><label>Adresse Mail : </label><input type="text" name="AdresseMail" value=<?php echo $_smarty_tpl->tpl_vars['AdresseMail']->value;?>
 /></p>
</fieldset>
<fieldset>
<legend>Modifier votre parcours scolaire</legend>
</fieldset>
</form>

<?php }elseif($_smarty_tpl->tpl_vars['connexion']->value=='FALSE'){?>
<fieldset>
<legend>Connexion</legend>
<p>Vous ne pouvez acceder à votre profil si vous n'êtes pas connecté.</p>
</fieldset>

<?php }else{ ?>
<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<form id="modifier" action="profil.php" method="get">
<input type="hidden" name="modifier" value="modifier">
<button type=submit>Modifier votre profil</button>
</form>
<fieldset>
<legend>Vos informations</legend>    
<p><label>Nom : <?php echo $_smarty_tpl->tpl_vars['Nom']->value;?>
</label></p>
<p><label>Prenom : <?php echo $_smarty_tpl->tpl_vars['Prenom']->value;?>
</label></p>
<p><label>Date de naissance : <?php echo $_smarty_tpl->tpl_vars['DateDeNaissance']->value;?>
</label></p>
<p><label>Code postale : <?php echo $_smarty_tpl->tpl_vars['CodePostale']->value;?>
</label></p>
<p><label>Departement : <?php echo $_smarty_tpl->tpl_vars['Departement']->value;?>
</label></p>
<p><label>Ville : <?php echo $_smarty_tpl->tpl_vars['Ville']->value;?>
</label></p>
<p><label>Pays : <?php echo $_smarty_tpl->tpl_vars['Pays']->value;?>
</label></p>
<p><label>Adresse Mail : <?php echo $_smarty_tpl->tpl_vars['AdresseMail']->value;?>
</label></p>
</fieldset>
<fieldset>
<legend>Votre parcours scolaire</legend>

</fieldset>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>