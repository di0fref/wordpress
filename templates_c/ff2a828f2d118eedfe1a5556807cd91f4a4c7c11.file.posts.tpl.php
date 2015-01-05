<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-04 00:18:53
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212124143754a3d0bbed4ce2-34590966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff2a828f2d118eedfe1a5556807cd91f4a4c7c11' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/posts.tpl',
      1 => 1420330729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212124143754a3d0bbed4ce2-34590966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a3d0bc60b2d9_27466618',
  'variables' => 
  array (
    'trail' => 0,
    'data' => 0,
    'config' => 0,
    'buttons' => 0,
    'button' => 0,
    'post' => 0,
    'link' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a3d0bc60b2d9_27466618')) {function content_54a3d0bc60b2d9_27466618($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_timesince')) include '/Users/fref/www/wordpress/wp-content/plugins/wpforum/assets/Smarty/libs/plugins/modifier.timesince.php';
?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("wp-content/plugins/wpforum/tpls/message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row no-gutters">
	<div class="col-md-6">
		<p class="postpage_title">
			<img width="22" class="forumicon" title="<?php echo ucfirst($_smarty_tpl->tpl_vars['data']->value['icon']);?>
" alt="<?php echo ucfirst($_smarty_tpl->tpl_vars['data']->value['icon']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['images_dir'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['icon'];?>
.png">
			<?php echo $_smarty_tpl->tpl_vars['data']->value['prefix'];
echo $_smarty_tpl->tpl_vars['data']->value['header'];?>

		</p>
	</div>
	<div class="col-md-6 text-align-right">
		<i class="fa fa-tags"></i>
		Tags: <?php echo implode(', ',$_smarty_tpl->tpl_vars['data']->value['tags']);?>

	</div>
</div>
<div class="clearfix"></div>
<div class="row marginb">
	<div class="col-md-6">
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
	<div class="col-md-6 forum-menurow">
		<?php if (isset($_smarty_tpl->tpl_vars['buttons']->value['tools'])) {?>
			
			<div class="btn-group pull-right tool-menu">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					Menu <span class="caret"></span>
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
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['data']->value['posts']) {?>
	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
		<div class="panel panel-default">
			<div class="panel-heading bold"><?php echo smarty_modifier_timesince($_smarty_tpl->tpl_vars['post']->value['date']);?>

				<span id="post-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="pull-right small">#<?php echo $_smarty_tpl->tpl_vars['post']->value['nr'];?>
</span>
			</div>
			<div class="panel-body forum-panel-body">
				<div class="row forum-post-row">
					<div class="col-md-2 forum-user-meta">
						<div class="thumbnail">
							<?php echo $_smarty_tpl->tpl_vars['post']->value['avatar'];?>

							<div class="caption align-center">
								<?php echo $_smarty_tpl->tpl_vars['post']->value['user']->display_name;?>
<br>
								Posts: <span class="badge"><?php echo number_format($_smarty_tpl->tpl_vars['post']->value['user']->post_count,0);?>
</span>
							</div>
						</div>
					</div>
					<div class="col-lg-10 forum-post-text">
						<p class="post-date bold"><?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</p>
						<hr>
						<p><?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
</p>
						<?php if ($_smarty_tpl->tpl_vars['post']->value['nr']==1&&isset($_smarty_tpl->tpl_vars['data']->value['solved_text'])) {?>
							<div class="alert alert-success" role="alert">
								<p><b><?php echo $_smarty_tpl->tpl_vars['data']->value['solved_title'];?>
</b> by <?php echo $_smarty_tpl->tpl_vars['data']->value['solved_user']->display_name;?>

									, <?php echo smarty_modifier_timesince($_smarty_tpl->tpl_vars['data']->value['solved_date']);?>
</p>

								<p><?php echo $_smarty_tpl->tpl_vars['data']->value['solved_text'];?>
</p>
							</div>
						<?php }?>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<div class="forum-post-links small">
					<?php if (isset($_smarty_tpl->tpl_vars['post']->value['post_links'])) {?>
						<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['post_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
							<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>

						<?php } ?>
					<?php }?>
				</div>
			</div>
		</div>
	<?php } ?>
<?php } else { ?>
	<p class="bold center">No posts yet.</p>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
<?php }} ?>
