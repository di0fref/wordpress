<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-25 13:55:39
         compiled from "/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/new_post_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:601625100548d884accde63-36277881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd8971e7370a362c376c8175fae885a80f20527e' => 
    array (
      0 => '/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/new_post_form.tpl',
      1 => 1419515682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '601625100548d884accde63-36277881',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548d884ad979e5_57205523',
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
<?php if ($_valid && !is_callable('content_548d884ad979e5_57205523')) {function content_548d884ad979e5_57205523($_smarty_tpl) {?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<h3>Reply to: <?php echo $_smarty_tpl->tpl_vars['thread_name']->value;?>
</h3>
<div style="width: 500px">
	<form name="forum-form-new-post" id="forum-form-new-post" method="post" role="form">

		<div class="form-group">
			<label for="subject">Subject</label>
			<input class="form-control" type="text" name="subject" required value="<?php if (isset($_smarty_tpl->tpl_vars['quote_data']->value['subject'])) {
echo $_smarty_tpl->tpl_vars['quote_data']->value['subject'];
} else { ?>Re: <?php echo $_smarty_tpl->tpl_vars['thread_name']->value;
}?>">
		</div>
		<div class="form-group">
			<textarea  rows="10" class="form-control" name="text" id="_bbcode" required><?php if (isset($_smarty_tpl->tpl_vars['quote_data']->value['text'])) {
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
