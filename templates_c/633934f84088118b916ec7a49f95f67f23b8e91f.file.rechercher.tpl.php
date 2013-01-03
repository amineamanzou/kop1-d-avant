<?php /* Smarty version Smarty-3.1.8, created on 2012-06-06 23:11:29
         compiled from "/srv/http/kop1-d-avant/template/rechercher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1827773504fcf0cb3edaca0-95530876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '633934f84088118b916ec7a49f95f67f23b8e91f' => 
    array (
      0 => '/srv/http/kop1-d-avant/template/rechercher.tpl',
      1 => 1339024224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1827773504fcf0cb3edaca0-95530876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fcf0cb3f05ab8_95601517',
  'variables' => 
  array (
    'chemin_header' => 0,
    'niveau_formulaire' => 0,
    'chemin_rechercher' => 0,
    'departement_formulaire' => 0,
    'ville_formulaire' => 0,
    'etablissement_formulaire' => 0,
    'date_formulaire' => 0,
    'affichage_resultat_formulaire' => 0,
    'resultat_requete' => 0,
    'champs' => 0,
    'chemin_footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fcf0cb3f05ab8_95601517')) {function content_4fcf0cb3f05ab8_95601517($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['niveau_formulaire']->value=='TRUE'){?>
<fieldset>
<legend> Action : Niveau </legend>
<form action="<?php echo $_smarty_tpl->tpl_vars['chemin_rechercher']->value;?>
"
      method="get"
      enctype="application/w-www-form-urlencoded">
    <p><label> Niveau <input id=Niveau name=Niveau placeholder="ex : DUT" required></label></p>
    <button type=submit> Valider </button>
</form>
</fieldset>
<?php }elseif($_smarty_tpl->tpl_vars['departement_formulaire']->value=='TRUE'){?>
<fieldset>
<legend> Action : Departement </legend>
<form action="<?php echo $_smarty_tpl->tpl_vars['chemin_rechercher']->value;?>
"
      method="get"
      enctype="application/w-www-form-urlencoded">
    <p><label> Departement <input id=Departement name=Departement placeholder="ex : Seine-St-Denis" required></label></p>
    <button type=submit> Valider </button>
</form>
</fieldset>
<?php }elseif($_smarty_tpl->tpl_vars['ville_formulaire']->value=='TRUE'){?>
<fieldset>
<legend> Action : Ville </legend>
<form action="<?php echo $_smarty_tpl->tpl_vars['chemin_rechercher']->value;?>
"
      method="get"
      enctype="application/w-www-form-urlencoded">
    <p><label> Ville <input id=Ville name=Ville placeholder="ex : Ville" required></label></p>
    <button type=submit> Valider </button>
</form>
</fieldset>
<?php }elseif($_smarty_tpl->tpl_vars['etablissement_formulaire']->value=='TRUE'){?>
<fieldset>
<legend> Action : Etablissement </legend>
<form action="<?php echo $_smarty_tpl->tpl_vars['chemin_rechercher']->value;?>
"
      method="get"
      enctype="application/w-www-form-urlencoded">
    <p><label> Etablissement <input id=Etablissement name=Etablissement placeholder="ex : Iut De Fontainebleau" required></label></p>
    <button type=submit> Valider  </button>
</form>
</fieldset>
<?php }elseif($_smarty_tpl->tpl_vars['date_formulaire']->value=='TRUE'){?>
<fieldset>
<legend> Action : Fourchette de date </legend>
<form action="<?php echo $_smarty_tpl->tpl_vars['chemin_rechercher']->value;?>
"
      method="get"
      enctype="application/w-www-form-urlencoded">
    <p><label> Date Début <input id=Debut name=Debut placeholder="ex : 01-01-2000" required></label></p>
    <p><label> Date Fin <input id=Fin name=Fin placeholder="ex : 30-06-2012" required></label></p>
    <button type=submit name="Date"> Valider </button>
</form>
</fieldset>
<?php }elseif($_smarty_tpl->tpl_vars['affichage_resultat_formulaire']->value=='TRUE'){?>
<fieldset>
<legend> Résultat de la recherche </legend>
<ul>
<?php  $_smarty_tpl->tpl_vars['champs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['champs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultat_requete']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['champs']->key => $_smarty_tpl->tpl_vars['champs']->value){
$_smarty_tpl->tpl_vars['champs']->_loop = true;
?>
<li><?php echo $_smarty_tpl->tpl_vars['champs']->value;?>
</li>
<?php } ?>
</ul>
<form action="<?php echo $_smarty_tpl->tpl_vars['chemin_rechercher']->value;?>
"
      method="get"
      enctype="application/w-www-form-urlencoded">
    <button type=submit name="Resultat"> Faire une autre recherche </button>
</form>
</fieldset>
<?php }else{ ?>
<fieldset>
<legend> Action : Pays </legend>
<form action="<?php echo $_smarty_tpl->tpl_vars['chemin_rechercher']->value;?>
"
      method="get"
      enctype="application/w-www-form-urlencoded">
    <p><label> Pays <input id=Pays name=Pays placeholder="ex : France" required></label></p>
    <button type=submit> Valider </button>
</form>
</fieldset>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>