<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-23 10:27:00
         compiled from "/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/permission.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113132537654994251ee1065-89302876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '572d677aa900418c0243dd817d1b45de49a54fef' => 
    array (
      0 => '/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/permission.tpl',
      1 => 1419330418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113132537654994251ee1065-89302876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54994251ee2203_68443791',
  'variables' => 
  array (
    'trail' => 0,
    'buttons' => 0,
    'button' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54994251ee2203_68443791')) {function content_54994251ee2203_68443791($_smarty_tpl) {?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<ul class="nav nav-pills pull-right">
	<?php  $_smarty_tpl->tpl_vars['button'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['button']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['buttons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['button']->key => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['button']->key;
?>
		<li role="presentation"><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</li>
	<?php } ?>
</ul>
<div class="clearfix"></div>
<div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div><?php }} ?>
