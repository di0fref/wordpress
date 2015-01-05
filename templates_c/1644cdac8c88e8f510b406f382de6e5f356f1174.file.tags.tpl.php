<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-03 12:54:51
         compiled from "wp-content/plugins/wpforum/tpls/tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88246048354a7e630b4ccf1-40521977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1644cdac8c88e8f510b406f382de6e5f356f1174' => 
    array (
      0 => 'wp-content/plugins/wpforum/tpls/tags.tpl',
      1 => 1420289688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88246048354a7e630b4ccf1-40521977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a7e630bbfc07_15255154',
  'variables' => 
  array (
    'tags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a7e630bbfc07_15255154')) {function content_54a7e630bbfc07_15255154($_smarty_tpl) {?><ul class="list-group">
	<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
		<li class="list-group-item small">
			<span class="badge"><?php echo $_smarty_tpl->tpl_vars['tag']->value['count'];?>
</span>
			<?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>

		</li>
	<?php } ?>
</ul><?php }} ?>
