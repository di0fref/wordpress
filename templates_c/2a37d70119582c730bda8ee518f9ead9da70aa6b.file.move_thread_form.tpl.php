<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-27 00:42:27
         compiled from "/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/move_thread_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1993395265549df6b77917e8-54755941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a37d70119582c730bda8ee518f9ead9da70aa6b' => 
    array (
      0 => '/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/move_thread_form.tpl',
      1 => 1419640928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1993395265549df6b77917e8-54755941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549df6b78d62c4_69013678',
  'variables' => 
  array (
    'trail' => 0,
    'forumDD' => 0,
    'nonce' => 0,
    'thread' => 0,
    'forum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549df6b78d62c4_69013678')) {function content_549df6b78d62c4_69013678($_smarty_tpl) {?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<h3>Move Topic</h3>
<div style="width: 500px">
	<form role="form" name="forum-form-move-thread" id="forum-form-move-thread" method="post">
		<div class="form-group">
			<label for="forum_id">Forum</label>
			<select id="forum_id" name="forum_id" class="form-control">
				<?php echo $_smarty_tpl->tpl_vars['forumDD']->value;?>

			</select>
			<input type="hidden" name="nonce" value="<?php echo $_smarty_tpl->tpl_vars['nonce']->value;?>
">
		</div>
		<button type="submit" class="btn btn-default" name="forum-form-move-thread">Submit</button>
		<input type="hidden" name="thread_id" value="<?php echo $_smarty_tpl->tpl_vars['thread']->value['id'];?>
">
		<input type="hidden" name="original_forum_id" value="<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
">
	</form><?php }} ?>
