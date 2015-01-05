<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-01 20:23:35
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/edit_post_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203763323954a3ec06f16773-05935446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b840746943198f10e397339db5b91a7c990b2f66' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/edit_post_form.tpl',
      1 => 1420143813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203763323954a3ec06f16773-05935446',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a3ec0707b483_21981885',
  'variables' => 
  array (
    'trail' => 0,
    'post' => 0,
    'formbuttons' => 0,
    'nonce' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a3ec0707b483_21981885')) {function content_54a3ec0707b483_21981885($_smarty_tpl) {?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("wp-content/plugins/wpforum/tpls/message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h3>Editing: <?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</h3>

<div class="panel panel-default">
	<div class="panel-heading bold">Edit post</div>
	<div class="panel-body forum-panel-body">
		<form name="forum_form" id="forum-form-edit-post" method="post" class="form-horizontal">
			<div class="form-group">
				<label for="subject" class="col-sm-2 control-label">Subject</label>

				<div class="col-sm-10">
					<input class="form-control" type="text" name="subject" id="subject" required value="<?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
">
				</div>
			</div>
			<div class="form-group">
				<label for="text" class="col-sm-2 control-label">Text</label>
				<div class="col-sm-10">
					<div><?php echo $_smarty_tpl->tpl_vars['formbuttons']->value;?>
</div>
					<textarea rows="10" class="form-control" name="text" id="text" required><?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
</textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button name="forum-form-edit-post" type="submit" class="btn btn-primary">Update post</button>
					<button onclick="goBack()" type="button" class="btn btn-default">Cancel</button>
				</div>
			</div>

			<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
			<input type="hidden" name="thread_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['parent_id'];?>
">
			<input type="hidden" name="nonce" value="<?php echo $_smarty_tpl->tpl_vars['nonce']->value;?>
">
		</form>
	</div>
</div><?php }} ?>
