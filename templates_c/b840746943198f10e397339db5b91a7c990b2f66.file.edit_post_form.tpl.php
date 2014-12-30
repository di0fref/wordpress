<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-30 15:50:17
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/edit_post_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121000381254a2c9b90db906-20038056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b840746943198f10e397339db5b91a7c990b2f66' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/edit_post_form.tpl',
      1 => 1419954394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121000381254a2c9b90db906-20038056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trail' => 0,
    'post' => 0,
    'nonce' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a2c9b916b215_07424030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a2c9b916b215_07424030')) {function content_54a2c9b916b215_07424030($_smarty_tpl) {?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<h3>Editing: <?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</h3>
<div class="forum-form">
	<form name="forum-form-edit-post" id="forum-form-edit-post" method="post" role="form">

		<div class="form-group">
			<label for="subject">Subject</label>
			<input class="form-control" type="text" name="subject" required value="<?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
">
		</div>
		<div class="form-group">
			<textarea  rows="10" class="form-control" name="text" id="_bbcode" required><?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
</textarea>
		</div>
		<button name="forum-form-edit-post" type="submit" class="btn btn-default">Update post</button>

		<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
		<input type="hidden" name="thread_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['parent_id'];?>
">
		<input type="hidden" name="nonce" value="<?php echo $_smarty_tpl->tpl_vars['nonce']->value;?>
">
	</form>
</div><?php }} ?>
