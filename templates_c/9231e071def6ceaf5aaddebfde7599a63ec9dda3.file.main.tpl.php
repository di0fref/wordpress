<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-30 15:41:25
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209119919954a2c6f26240b8-58284722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9231e071def6ceaf5aaddebfde7599a63ec9dda3' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/main.tpl',
      1 => 1419954083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209119919954a2c6f26240b8-58284722',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a2c6f28fef07_09480858',
  'variables' => 
  array (
    'trail' => 0,
    'message' => 0,
    'buttons' => 0,
    'button' => 0,
    'data' => 0,
    'border' => 0,
    'cat' => 0,
    'config' => 0,
    'forum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a2c6f28fef07_09480858')) {function content_54a2c6f28fef07_09480858($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/Users/fref/www/wordpress/wp-content/plugins/wpforum/assets/Smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_timesince')) include '/Users/fref/www/wordpress/wp-content/plugins/wpforum/assets/Smarty/libs/plugins/modifier.timesince.php';
?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
	<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php }?>
<div class="menu-row">
	
	<?php if (isset($_smarty_tpl->tpl_vars['buttons']->value['tools'])) {?>
		<div class="btn-group pull-right">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				Topic tools <span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<?php  $_smarty_tpl->tpl_vars['button'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['button']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['buttons']->value['tools']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['button']->key => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['button']->key;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</li>
				<?php } ?>
			</ul>
		</div>
	<?php }?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['buttons']->value['buttons'])) {?>
		<?php  $_smarty_tpl->tpl_vars['button'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['button']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['buttons']->value['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['button']->key => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['button']->key;
?>
			<?php echo $_smarty_tpl->tpl_vars['button']->value;?>

		<?php } ?>
	<?php }?>
</div>
<div class="clearfix"></div>
<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
	<table border="<?php echo $_smarty_tpl->tpl_vars['border']->value;?>
" class="forum-table table table-bordered table-striped" cellspacing='0'>
		<tr>
			<th width="60%"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</th>
			<th class="align-center">Topics</th>
			<th class="align-center">Posts</th>
			<th>Last Post</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['forum'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['forum']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['forums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['forum']->key => $_smarty_tpl->tpl_vars['forum']->value) {
$_smarty_tpl->tpl_vars['forum']->_loop = true;
?>
			<tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
				<td>
					<p class="forumtitle">
						<img width="22" class="forumicon" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['images_dir'];?>
/category.png">
						<a href="<?php echo $_smarty_tpl->tpl_vars['forum']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['forum']->value['name'];?>
</a>
						<?php echo $_smarty_tpl->tpl_vars['forum']->value['links']['rss'];?>

					</p>

					<span class="forumdescription small"><?php echo $_smarty_tpl->tpl_vars['forum']->value['description'];?>
</span>
				</td>
				<td class="align-center"><?php echo number_format($_smarty_tpl->tpl_vars['forum']->value['thread_count'],0);?>
</td>
				<td class="align-center"><?php echo number_format($_smarty_tpl->tpl_vars['forum']->value['post_count'],0);?>
</td>
				<td><?php echo smarty_modifier_timesince($_smarty_tpl->tpl_vars['forum']->value['last_post']);?>
</td>
			</tr>
		<?php } ?>
	</table>
<?php } ?><?php }} ?>