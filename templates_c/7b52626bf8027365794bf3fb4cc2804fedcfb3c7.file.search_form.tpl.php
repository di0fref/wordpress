<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-03 14:07:27
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125581040254a7e93ed02578-57733829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b52626bf8027365794bf3fb4cc2804fedcfb3c7' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/search_form.tpl',
      1 => 1420294043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125581040254a7e93ed02578-57733829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a7e93ed22a39_36496258',
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a7e93ed22a39_36496258')) {function content_54a7e93ed22a39_36496258($_smarty_tpl) {?><div class="pull-left" style="margin-left:20px">
	<form role="form" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" name="forum_form" id="forum-search" class="form-inline" method="post">
		<div class="form-group">
			<input type="text" class="form-control" id="search_term" name="search_term" placeholder="Quick Search">
		</div>
		<input type="hidden" name="search_criteria" value="posts">
		<button type="submit" name="forum-search" class="btn btn-default">Search</button>
	</form>
</div><?php }} ?>
