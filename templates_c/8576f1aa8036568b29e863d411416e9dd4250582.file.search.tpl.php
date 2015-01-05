<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-01 20:24:01
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95189200354a3fdc1f16fc8-26182588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8576f1aa8036568b29e863d411416e9dd4250582' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/search.tpl',
      1 => 1420143839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95189200354a3fdc1f16fc8-26182588',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a3fdc2050a12_17455919',
  'variables' => 
  array (
    'nonce' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a3fdc2050a12_17455919')) {function content_54a3fdc2050a12_17455919($_smarty_tpl) {?><h3>Search Forums</h3>
<div class="panel panel-default">
	<div class="panel-heading bold">Search</div>
	<div class="panel-body forum-panel-body">
		<form role="form" name="forum_form" id="forum-search" class="form-horizontal" method="post">
			<div class="form-group">
				<label for="search_term" class="col-sm-2 control-label">Search Term</label>

				<div class="col-sm-10">
					<input class="form-control" id="search_term" type="text" name="search_term" required>
				</div>
			</div>

			<div class="form-group">
				<label for="search_criteria" class="col-sm-2 control-label">Search in</label>
				<div class="col-sm-10">
					<select name="search_criteria" id="search_criteria" class="form-control">
						<option value="titles">Search Titles Only</option>
						<option value="posts">Search Entire Posts</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="search_between" class="col-sm-2 control-label">Posted Between</label>
				<div class="col-sm-2">
					<input name="search_start_date" class="form-control" type="date">
				</div>
				<div class="col-sm-2">
					<input name="search_end_date" class="form-control" type="date">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary" name="forum-search">Search</button>
					<button onclick="goBack()" type="button" class="btn btn-default">Cancel</button>
				</div>
			</div>
			<input type="hidden" name="nonce" value="<?php echo $_smarty_tpl->tpl_vars['nonce']->value;?>
">
		</form>
	</div>
</div><?php }} ?>
