<?php /* Smarty version Smarty-3.1.8, created on 2012-06-06 13:47:37
         compiled from "/srv/http/kop1-d-avant/template/upload_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103693954fcf5f7970fb23-32028731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98541aeb916fa81faf13bbc124531f8ad26a896b' => 
    array (
      0 => '/srv/http/kop1-d-avant/template/upload_image.tpl',
      1 => 1338924359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103693954fcf5f7970fb23-32028731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chemin_header' => 0,
    'erreur' => 0,
    'message' => 0,
    'chemin_vers_photo_uploadee' => 0,
    'taille_carre' => 0,
    'chemin_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fcf5f79797dc0_30367522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fcf5f79797dc0_30367522')) {function content_4fcf5f79797dc0_30367522($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['erreur']->value){?>
<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<?php }else{ ?>
<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<p><img src=<?php echo $_smarty_tpl->tpl_vars['chemin_vers_photo_uploadee']->value;?>
 height=<?php echo $_smarty_tpl->tpl_vars['taille_carre']->value;?>
 width=<?php echo $_smarty_tpl->tpl_vars['taille_carre']->value;?>
 ></p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['chemin_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>