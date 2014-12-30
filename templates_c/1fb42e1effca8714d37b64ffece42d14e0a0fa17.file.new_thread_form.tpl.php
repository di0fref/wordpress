<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-30 16:16:28
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/new_thread_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2259620154a2c7b75eb6f0-57761573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fb42e1effca8714d37b64ffece42d14e0a0fa17' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/new_thread_form.tpl',
      1 => 1419956174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2259620154a2c7b75eb6f0-57761573',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a2c7b763b421_07322338',
  'variables' => 
  array (
    'trail' => 0,
    'record' => 0,
    'nonce' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a2c7b763b421_07322338')) {function content_54a2c7b763b421_07322338($_smarty_tpl) {?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<h3>Start New Topic</h3>
<div class="forum-form">
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
		<textarea  rows="10" class="form-control" name="text" id="text" required></textarea>
	</div>
	<button type="submit" class="btn btn-default" name="forum-form-new-thread">Submit</button>
	<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['record']->value;?>
">
	<input type="hidden" name="nonce" value="<?php echo $_smarty_tpl->tpl_vars['nonce']->value;?>
">
</form>
</div>
<?php }} ?>
