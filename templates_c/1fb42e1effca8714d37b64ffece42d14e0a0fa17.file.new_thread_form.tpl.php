<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-02 23:49:32
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/new_thread_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147750520254a3d0b85ddd15-75182476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fb42e1effca8714d37b64ffece42d14e0a0fa17' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/new_thread_form.tpl',
      1 => 1420242569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147750520254a3d0b85ddd15-75182476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a3d0b8649a86_75867079',
  'variables' => 
  array (
    'trail' => 0,
    'formbuttons' => 0,
    'record' => 0,
    'nonce' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a3d0b8649a86_75867079')) {function content_54a3d0b8649a86_75867079($_smarty_tpl) {?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("wp-content/plugins/wpforum/tpls/message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h3>Start New Topic</h3>

<div class="panel panel-default">
	<div class="panel-heading bold">New Topic</div>
	<div class="panel-body forum-panel-body">
		<form role="form" name="forum_form" id="forum-form-new-thread" class="form-horizontal" method="post">
			<div class="form-group">
				<label for="subject" class="col-sm-2 control-label">Subject</label>

				<div class="col-sm-10">
					<input class="form-control" type="text" id="subject" name="subject" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
						<label>
							<input name="is_question" value="1" type="checkbox"> This is a question
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="text" class="col-sm-2 control-label">Text</label>
				<div class="col-sm-10">
					<div><?php echo $_smarty_tpl->tpl_vars['formbuttons']->value;?>
</div>
					<textarea rows="10" class="form-control" name="text" id="text" required></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="tags" class="col-sm-2 control-label">Tags</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="tags" id="tags" data-role="tagsinput">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary" name="forum-form-new-thread">Submit Topic</button>
					<button onclick="goBack()" type="button" class="btn btn-default">Cancel</button>
				</div>
			</div>
			<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['record']->value;?>
">
			<input type="hidden" name="nonce" value="<?php echo $_smarty_tpl->tpl_vars['nonce']->value;?>
">
		</form>
	</div>
</div>
<?php }} ?>
