<?php /* Smarty version Smarty-3.1.8, created on 2012-06-06 07:54:28
         compiled from "/srv/http/kop1-d-avant/template/connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15080565534fcf0cb48781d7-05360462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9427d4bc1e5f7bfca81b37831d929a762e79be88' => 
    array (
      0 => '/srv/http/kop1-d-avant/template/connexion.tpl',
      1 => 1338935990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15080565534fcf0cb48781d7-05360462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chemin_header' => 0,
    'chemin_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fcf0cb48a46a1_74481522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fcf0cb48a46a1_74481522')) {function content_4fcf0cb48a46a1_74481522($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<fieldset>
<legend>Connexion</legend>
<form id="Connexion" method="POST" action="connexion.php">
    <label for=email>Email</label>
    <input id=email name=email type=email placeholder="arnaud@chezwam.net" required autofocus>
    <br />
    <label for=motdepasse>Mot de passe</label>
    <input id=motdepasse name=motdepasse type=motdepasse placeholder="******" required>
    <br />
    <button type=submit name="Connexion" value="Connexion">Connexion</button>
</form>
</fieldset>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>