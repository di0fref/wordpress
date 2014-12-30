<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-30 15:41:36
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/threads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176328040454a2c7b09ab462-59880215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b22422c785ce14412b5cf29412eab5d8cfad0cf' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/threads.tpl',
      1 => 1419953692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176328040454a2c7b09ab462-59880215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trail' => 0,
    'message' => 0,
    'buttons' => 0,
    'button' => 0,
    'border' => 0,
    'data' => 0,
    'thread' => 0,
    'config' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a2c7b0cd9204_85601742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a2c7b0cd9204_85601742')) {function content_54a2c7b0cd9204_85601742($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_timesince')) include '/Users/fref/www/wordpress/wp-content/plugins/wpforum/assets/Smarty/libs/plugins/modifier.timesince.php';
?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
	<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php }?>
<div class="menu-row">
	<?php if (isset($_smarty_tpl->tpl_vars['buttons']->value['tools'])) {?>
		
		<div class="btn-group pull-right">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				Forum tools <span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<?php  $_smarty_tpl->tpl_vars['button'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['button']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['buttons']->value['tools']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['button']->key => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['button']->key;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</li>
				<?php } ?>
			</ul>
		</div>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['buttons']->value['buttons'])) {?>
		
		<?php  $_smarty_tpl->tpl_vars['button'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['button']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['buttons']->value['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['button']->key => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['button']->key;
?>
			<?php echo $_smarty_tpl->tpl_vars['button']->value;?>

		<?php } ?>
	<?php }?>
</div>
<div class="clearfix"></div>
<table border="<?php echo $_smarty_tpl->tpl_vars['border']->value;?>
" class="forum-table table table-bordered table-striped " cellspacing='0'>
	<tr>
		<th width="60%">Threads</th>
		<th class="align-center">Replies</th>
		<th class="align-center">Views</th>
		<th>Last post by</th>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
		<?php  $_smarty_tpl->tpl_vars['thread'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thread']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->key => $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->_loop = true;
?>
			<tr>
				<td>
					<p class="threadtitle">
						<img width="22" class="forumicon" title="<?php echo ucfirst($_smarty_tpl->tpl_vars['thread']->value['icon']);?>
" alt="<?php echo ucfirst($_smarty_tpl->tpl_vars['thread']->value['icon']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['images_dir'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['icon'];?>
.png">
						<?php if ($_smarty_tpl->tpl_vars['thread']->value['is_new']) {?><b><?php echo $_smarty_tpl->tpl_vars['thread']->value['prefix'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['thread']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['subject'];?>
</a></b><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['thread']->value['is_new']==0) {
echo $_smarty_tpl->tpl_vars['thread']->value['prefix'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['thread']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['subject'];?>
</a><?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['thread']->value['links'])) {?>
							<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['thread']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['action']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
								<?php echo $_smarty_tpl->tpl_vars['link']->value;?>

							<?php } ?>
						<?php }?>
					</p>
					<span class="small forumdescription">Started by: <?php echo $_smarty_tpl->tpl_vars['thread']->value['user']->display_name;?>
, <?php echo smarty_modifier_timesince($_smarty_tpl->tpl_vars['thread']->value['date']);?>
</span>
				</td>
				<td class="align-center"><?php echo number_format($_smarty_tpl->tpl_vars['thread']->value['post_replies'],0);?>
</td>
				<td class="align-center"><?php echo number_format($_smarty_tpl->tpl_vars['thread']->value['views'],0);?>
</td>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['thread']->value['last_poster']['avatar'];
echo $_smarty_tpl->tpl_vars['thread']->value['last_poster']['display_name'];?>
<br>
					<span class="small"><?php echo smarty_modifier_timesince($_smarty_tpl->tpl_vars['thread']->value['last_post']);?>
</span>
				</td>
			</tr>
		<?php } ?>
	<?php } else { ?>
		<tr>
			<td colspan="5" class="center bold">No threads yet.</td>
		</tr>
	<?php }?>
</table>

<?php }} ?>
