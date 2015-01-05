<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-03 01:11:13
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/edit_thread_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97871646854a3ec752c4631-92532525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e4bce3308fdc411125e12da1ca8348d4fddeccd' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/edit_thread_form.tpl',
      1 => 1420247394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97871646854a3ec752c4631-92532525',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a3ec753dcad2_81464845',
  'variables' => 
  array (
    'trail' => 0,
    'thread' => 0,
    'user_can_pin' => 0,
    'statusDD' => 0,
    'tags' => 0,
    'nonce' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a3ec753dcad2_81464845')) {function content_54a3ec753dcad2_81464845($_smarty_tpl) {?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("wp-content/plugins/wpforum/tpls/message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h3>Edit Topic</h3>
<div class="panel panel-default">
	<div class="panel-heading bold">Edit Topic</div>
	<div class="panel-body forum-panel-body">
		<form role="form" name="forum_form" id="forum-form-edit-thread" method="post" class="form-horizontal">
			<div class="form-group">
				<label for="subject" class="col-sm-2 control-label">Subject</label>

				<div class="col-sm-10">
					<input class="form-control" type="text" name="subject" required value="<?php echo $_smarty_tpl->tpl_vars['thread']->value['subject'];?>
">
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['user_can_pin']->value) {?>
				<div class="form-group">
					<label for="status" class="col-sm-2 control-label">Status</label>

					<div class="col-sm-10">
						<select id="status" name="status" id="status" class="form-control">
							<?php echo $_smarty_tpl->tpl_vars['statusDD']->value;?>

						</select>
					</div>
				</div>
			<?php }?>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
						<label>
							<input id="is_question" name="is_question" value="1" <?php if ($_smarty_tpl->tpl_vars['thread']->value['is_question']==1) {?> checked <?php }?> type="checkbox">This is a question
						</label>
					</div>
				</div>
				<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
						<label>
							<input id="is_solved" name="is_solved" value="1" <?php if ($_smarty_tpl->tpl_vars['thread']->value['is_solved']==1) {?> checked <?php }?> type="checkbox">Solved
						</label>
					</div>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['user_can_pin']->value) {?>
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
								<input id="sticky" name="sticky" value="1" <?php if ($_smarty_tpl->tpl_vars['thread']->value['sticky']==1) {?> checked <?php }?> type="checkbox">Pinned
							</label>
						</div>
					</div>
				<?php }?>
			</div>
			<div class="form-group">
				<label for="tags" class="col-sm-2 control-label">Tags</label>
				<div class="col-sm-10">
					<input value="<?php echo $_smarty_tpl->tpl_vars['tags']->value;?>
" class="form-control" type="text" name="tags" id="tags" data-role="tagsinput">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary" name="forum-form-edit-thread">Submit</button>
					<button onclick="goBack()" type="button" class="btn btn-default">Cancel</button>
				</div>
			</div>
			<input type="hidden" name="thread_id" value="<?php echo $_smarty_tpl->tpl_vars['thread']->value['id'];?>
">
			<input type="hidden" name="nonce" value="<?php echo $_smarty_tpl->tpl_vars['nonce']->value;?>
">
		</form>
	</div>
</div><?php }} ?>
