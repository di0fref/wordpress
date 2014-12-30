<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-23 13:10:05
         compiled from "/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/new_thread_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1013833224548d892ef0caf8-98553525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c4d01612a54d75b2a781379f03e6d09ff440124' => 
    array (
      0 => '/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/new_thread_form.tpl',
      1 => 1419332407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1013833224548d892ef0caf8-98553525',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548d892f035ef4_03065034',
  'variables' => 
  array (
    'trail' => 0,
    'record' => 0,
    'nonce' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548d892f035ef4_03065034')) {function content_548d892f035ef4_03065034($_smarty_tpl) {?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<h3>Start New Topic</h3>
<div style="width: 500px">
<form role="form" name="forum-form-new-thread" id="forum-form-new-thread" method="post">
	<div class="form-group">
		<label for="subject">Subject</label>
		<input class="form-control" type="text" name="subject" required>
	</div>
	<div class="checkbox">
		<label>
			<input name="is_question" value="1" type="checkbox"> This is a question
		</label>
	</div>
	<div class="form-group">
		<textarea  rows="10" class="form-control" name="text" id="_bbcode" required></textarea>
	</div>
	<button type="submit" class="btn btn-default" name="forum-form-new-thread">Submit</button>
	<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['record']->value;?>
">
	<input type="hidden" name="nonce" value="<?php echo $_smarty_tpl->tpl_vars['nonce']->value;?>
">
</form>
</div>
<?php }} ?>
