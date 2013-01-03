<?php /* Smarty version Smarty-3.1.8, created on 2012-06-06 07:54:08
         compiled from "/srv/http/kop1-d-avant/template/accueil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2475185564fcf0ca05508f2-51927599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5260539b0f75404ba96f20f5369be9f854bf3dcc' => 
    array (
      0 => '/srv/http/kop1-d-avant/template/accueil.tpl',
      1 => 1338936139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2475185564fcf0ca05508f2-51927599',
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
  'unifunc' => 'content_4fcf0ca057fb63_40096934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fcf0ca057fb63_40096934')) {function content_4fcf0ca057fb63_40096934($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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