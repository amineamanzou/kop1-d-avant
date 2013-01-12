<?php /* Smarty version Smarty-3.1.8, created on 2013-01-04 13:46:52
         compiled from "/Users/macbook/Sites/kop1-d-avant/template/accueil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191837179250e6dd4cb26862-97292522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84f0f88630114707f36554b481d6e81d03dfe325' => 
    array (
      0 => '/Users/macbook/Sites/kop1-d-avant/template/accueil.tpl',
      1 => 1357245256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191837179250e6dd4cb26862-97292522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chemin_header' => 0,
    'chemin_illustration' => 0,
    'chemin_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e6dd4cb7c6e7_91022833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e6dd4cb7c6e7_91022833')) {function content_50e6dd4cb7c6e7_91022833($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<illustration>
<object type="image/svg+xml" data="<?php echo $_smarty_tpl->tpl_vars['chemin_illustration']->value;?>
">  
    <p>Votre navigateur ne supporte pas le SVG.</p>
</object>   
</illustration>

<formulaire>
<form id="Connexion" method="post" action="connexion.php">
    <label for=email>Email</label>
    <input id=email name=email type=email placeholder="arnaud@chezwam.net" required autofocus>
    <br />
    <label for=motdepasse>Mot de passe</label>
    <input id=motdepasse name=motdepasse type=motdepasse placeholder="******" required>
    <br />
    <button type=submit name="Connexion" value="Connexion">Connexion</button>
</form>
</formulaire>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>