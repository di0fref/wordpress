<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-01 20:24:27
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/new_post_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119666830454a3d0d5c047b8-09803406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cff5c4a449fd1faac6766edb3e1e27428df6428' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/new_post_form.tpl',
      1 => 1420143862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119666830454a3d0d5c047b8-09803406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a3d0d5ce5f00_20327272',
  'variables' => 
  array (
    'trail' => 0,
    'thread_name' => 0,
    'quote_data' => 0,
    'formbuttons' => 0,
    'record' => 0,
    'nonce' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a3d0d5ce5f00_20327272')) {function content_54a3d0d5ce5f00_20327272($_smarty_tpl) {?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("wp-content/plugins/wpforum/tpls/message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h3>Reply to: <?php echo $_smarty_tpl->tpl_vars['thread_name']->value;?>
</h3>
<div class="panel panel-default">
	<div class="panel-heading bold">Reply</div>
	<div class="panel-body forum-panel-body">
		<form name="forum_form" id="forum_form_new_post" class="form-horizontal" method="post" role="form">

			<div class="form-group">
				<label for="subject" class="col-sm-2 control-label">Subject</label>

				<div class="col-sm-10">
					<input class="form-control" type="text" id="subject" name="subject" required value="<?php if (isset($_smarty_tpl->tpl_vars['quote_data']->value['subject'])) {
echo $_smarty_tpl->tpl_vars['quote_data']->value['subject'];
} else { ?>Re: <?php echo $_smarty_tpl->tpl_vars['thread_name']->value;
}?>">
				</div>
			</div>
			<div class="form-group">
				<label for="text" class="col-sm-2 control-label">Text</label>

				<div class="col-sm-10">
					<div><?php echo $_smarty_tpl->tpl_vars['formbuttons']->value;?>
</div>
					<textarea rows="10" class="form-control" name="text" id="text" required><?php if (isset($_smarty_tpl->tpl_vars['quote_data']->value['text'])) {
echo $_smarty_tpl->tpl_vars['quote_data']->value['text'];
}?></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button name="forum-form-new-post" type="submit" class="btn btn-primary">Post reply</button>
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
