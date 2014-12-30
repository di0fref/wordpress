<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-23 11:44:08
         compiled from "/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/edit_post_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:432626919549952ff423873-68023458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f55f9a1aee7b0516211c894c4cdd5cb15c818e25' => 
    array (
      0 => '/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/edit_post_form.tpl',
      1 => 1419335034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '432626919549952ff423873-68023458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549952ff4fbd50_71175244',
  'variables' => 
  array (
    'trail' => 0,
    'post' => 0,
    'nonce' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549952ff4fbd50_71175244')) {function content_549952ff4fbd50_71175244($_smarty_tpl) {?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<h3>Editing: <?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</h3>
<div style="width: 500px">
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
