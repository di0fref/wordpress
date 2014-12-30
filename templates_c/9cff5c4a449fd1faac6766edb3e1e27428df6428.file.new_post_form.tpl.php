<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-30 16:21:32
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/new_post_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202039534354a2c8be9696b3-60940834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cff5c4a449fd1faac6766edb3e1e27428df6428' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/new_post_form.tpl',
      1 => 1419956171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202039534354a2c8be9696b3-60940834',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a2c8bea48017_93789174',
  'variables' => 
  array (
    'trail' => 0,
    'thread_name' => 0,
    'quote_data' => 0,
    'record' => 0,
    'nonce' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a2c8bea48017_93789174')) {function content_54a2c8bea48017_93789174($_smarty_tpl) {?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<h3>Reply to: <?php echo $_smarty_tpl->tpl_vars['thread_name']->value;?>
</h3>
<div class="forum-form">
	<form name="forum-form-new-post" id="forum-form-new-post" method="post" role="form">

		<div class="form-group">
			<label for="subject">Subject</label>
			<input class="form-control" type="text" name="subject" required value="<?php if (isset($_smarty_tpl->tpl_vars['quote_data']->value['subject'])) {
echo $_smarty_tpl->tpl_vars['quote_data']->value['subject'];
} else { ?>Re: <?php echo $_smarty_tpl->tpl_vars['thread_name']->value;
}?>">
		</div>
		<div class="form-group">
			<textarea  rows="10" class="form-control" name="text" id="text" required><?php if (isset($_smarty_tpl->tpl_vars['quote_data']->value['text'])) {
echo $_smarty_tpl->tpl_vars['quote_data']->value['text'];
}?></textarea>
		</div>
		<button name="forum-form-new-post" type="submit" class="btn btn-default">Submit</button>

		<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['record']->value;?>
">
		<input type="hidden" name="nonce" value="<?php echo $_smarty_tpl->tpl_vars['nonce']->value;?>
">
	</form>
</div><?php }} ?>
