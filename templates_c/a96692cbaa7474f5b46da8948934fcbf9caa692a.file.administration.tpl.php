<?php /* Smarty version Smarty-3.1.8, created on 2012-06-06 15:13:53
         compiled from "/srv/http/kop1-d-avant/template/administration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5709657514fcf660be37fd6-66236052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a96692cbaa7474f5b46da8948934fcbf9caa692a' => 
    array (
      0 => '/srv/http/kop1-d-avant/template/administration.tpl',
      1 => 1338995494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5709657514fcf660be37fd6-66236052',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fcf660be73662_91722085',
  'variables' => 
  array (
    'chemin_header' => 0,
    'droit_admin' => 0,
    'ajouter_etablissement' => 0,
    'chemin_administration' => 0,
    'supprimer_etablissement' => 0,
    'chemin_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fcf660be73662_91722085')) {function content_4fcf660be73662_91722085($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['droit_admin']->value=='FALSE'){?>
<p>Vous n'êtes pas administateur de ce site, et ne pouvez acceder à cette page.</p>
<?php }else{ ?>
<?php if ($_smarty_tpl->tpl_vars['ajouter_etablissement']->value=='TRUE'){?>
<fieldset>
<legend> Action : Ajouter un établissement </legend>
<form action="<?php echo $_smarty_tpl->tpl_vars['chemin_administration']->value;?>
"
      method="post"
      enctype="application/w-www-form-urlencoded">
    <p><label> Nom <input id=Ville name=Ville type=cityname  placeholder="ex : IUT de Fontainebleau" required></label></p>
    <p><label> Ville <input id=Ville name=Ville type=cityname  placeholder="ex : Paris" required></label></p>
    <p><label> Pays <input id=Pays name=Pays placeholder="ex : France" required></label></p>
    <p><label> Departement <input id=Departement name=Departement placeholder="ex : Seine-St-Denis" required></label></p>
    <p><label> CodePostale <input id=CodePostale name=CodePostale placeholder="ex : 93330" required></label></p>
    <button type=submit name="ajouter_etablissement">Valider</button>
</form>
</fieldset>
<?php }elseif($_smarty_tpl->tpl_vars['supprimer_etablissement']->value=='TRUE'){?>
<fieldset>
<legend> Action : Supprimer un établissement </legend>
<form action="<?php echo $_smarty_tpl->tpl_vars['chemin_administration']->value;?>
"
      method="post"
      enctype="application/w-www-form-urlencoded">
    <p><label> Nom <input id=Ville name=Ville type=cityname  placeholder="ex : IUT de Fontainebleau" required></label></p>
    <p><label> Ville <input id=Ville name=Ville type=cityname  placeholder="ex : Paris" required></label></p>
    <p><label> Pays <input id=Pays name=Pays placeholder="ex : France" required></label></p>
    <p><label> Departement <input id=Departement name=Departement placeholder="ex : Seine-St-Denis" required></label></p>
    <p><label> CodePostale <input id=CodePostale name=CodePostale placeholder="ex : 93330" required></label></p>
    <button type=submit name="supprimer_etablissement">Valider</button>
</form>
</fieldset>
<?php }else{ ?>
<fieldset>
<legend> Actions : </legend>
<form id="ajouter_etablissement" action="administration.php" method="get">
<p><input type="hidden" name="ajouter_etablissement" value="modifier"></p>
<button type=submit>Ajouter Etablissement</button>
</form>
<form id="supprimer_etablissement" value="supprimer_etablissement" action="administration.php" method="get">
<p><input type="hidden" name="supprimer_etablissement" value="modifier"></p>
<button type=submit>Supprimer Etablissement</button>
</form>
</fieldset>
<?php }?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>