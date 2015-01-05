<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-01 11:34:22
         compiled from "wp-content/plugins/wpforum/tpls/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36029365054a3cdc5a69d38-07574931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bb954eec7015e8f035dff8aa453856c6c4499ef' => 
    array (
      0 => 'wp-content/plugins/wpforum/tpls/message.tpl',
      1 => 1420112057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36029365054a3cdc5a69d38-07574931',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a3cdc5ac5879_06578800',
  'variables' => 
  array (
    'messages' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a3cdc5ac5879_06578800')) {function content_54a3cdc5ac5879_06578800($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
	<div id="forum-messages">
		<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
			<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['message']->value['level'];?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['message']->value['level'];?>
"></i> &nbsp;<?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>
</div>
		<?php } ?>
	</div>
<?php }?><?php }} ?>
