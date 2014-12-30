<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-27 01:00:09
         compiled from "/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/edit_thread_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:506991104549c350ccc6e40-85371440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf305f34d83ee15603d92e7dc02951b5cda317e' => 
    array (
      0 => '/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/edit_thread_form.tpl',
      1 => 1419641927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '506991104549c350ccc6e40-85371440',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549c350cd6a655_25115992',
  'variables' => 
  array (
    'trail' => 0,
    'thread' => 0,
    'user_can_pin' => 0,
    'nonce' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549c350cd6a655_25115992')) {function content_549c350cd6a655_25115992($_smarty_tpl) {?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<h3>Edit Topic</h3>
<div style="width: 500px">
	<form role="form" name="forum-form-edit-thread" id="forum-form-edit-thread" method="post">
		<div class="form-group">
			<label for="subject">Subject</label>
			<input class="form-control" type="text" name="subject" required value="<?php echo $_smarty_tpl->tpl_vars['thread']->value['subject'];?>
">
		</div>
		<div class="checkbox">
			<label>
				<input id="is_question" name="is_question" value="1" <?php if ($_smarty_tpl->tpl_vars['thread']->value['is_question']==1) {?> checked <?php }?> type="checkbox">
				This is a question
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input id="is_solved" name="is_solved" value="1" <?php if ($_smarty_tpl->tpl_vars['thread']->value['is_solved']==1) {?> checked <?php }?> type="checkbox">
				Solved
			</label>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['user_can_pin']->value) {?>
			<div class="checkbox">
				<label>
					<input id="sticky" name="sticky" value="1" <?php if ($_smarty_tpl->tpl_vars['thread']->value['sticky']==1) {?> checked <?php }?> type="checkbox">
					Pinned
				</label>
			</div>
		<?php }?>
		<button type="submit" class="btn btn-default" name="forum-form-edit-thread">Submit</button>
		<input type="hidden" name="thread_id" value="<?php echo $_smarty_tpl->tpl_vars['thread']->value['id'];?>
">
		<input type="hidden" name="nonce" value="<?php echo $_smarty_tpl->tpl_vars['nonce']->value;?>
">
	</form>
</div>
<?php }} ?>
