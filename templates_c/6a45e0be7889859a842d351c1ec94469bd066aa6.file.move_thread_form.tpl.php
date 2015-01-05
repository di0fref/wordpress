<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-31 12:31:59
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/move_thread_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44512280754a3ecbf37eb69-25563562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a45e0be7889859a842d351c1ec94469bd066aa6' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/move_thread_form.tpl',
      1 => 1420020965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44512280754a3ecbf37eb69-25563562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trail' => 0,
    'forumDD' => 0,
    'nonce' => 0,
    'thread' => 0,
    'forum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a3ecbf400fe9_07811166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a3ecbf400fe9_07811166')) {function content_54a3ecbf400fe9_07811166($_smarty_tpl) {?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("wp-content/plugins/wpforum/tpls/message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h3>Move Topic</h3>
<div class="panel panel-default">
	<div class="panel-heading bold">Move Topic</div>
	<div class="panel-body forum-panel-body">
		<form role="form" name="forum_form" id="forum-form-move-thread" method="post" class="form-horizontal">
			<div class="form-group">
				<label for="forum_id" class="col-sm-2 control-label">Forum</label>

				<div class="col-sm-10">
					<select id="forum_id" name="forum_id" id="forum_id" class="form-control">
						<?php echo $_smarty_tpl->tpl_vars['forumDD']->value;?>

					</select>
				</div>
				<input type="hidden" name="nonce" value="<?php echo $_smarty_tpl->tpl_vars['nonce']->value;?>
">
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary" name="forum-form-move-thread">Submit</button>
				</div>
			</div>
			<input type="hidden" name="thread_id" value="<?php echo $_smarty_tpl->tpl_vars['thread']->value['id'];?>
">
			<input type="hidden" name="original_forum_id" value="<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
">
		</form>
	</div>
</div>
<?php }} ?>
