<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-28 16:08:06
         compiled from "/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:229898703548d8723367bb5-93238807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '352eb04e58e125b883a9b51d392f3baab7cc2bfa' => 
    array (
      0 => '/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/posts.tpl',
      1 => 1419782855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229898703548d8723367bb5-93238807',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548d87235bd7c1_51862306',
  'variables' => 
  array (
    'trail' => 0,
    'message' => 0,
    'data' => 0,
    'config' => 0,
    'buttons' => 0,
    'button' => 0,
    'post' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548d87235bd7c1_51862306')) {function content_548d87235bd7c1_51862306($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_timesince')) include '/Users/fredrik/www/wordpress/wp-content/plugins/wpforum/assets/Smarty/libs/plugins/modifier.timesince.php';
?><div class="forum-trail"><?php echo $_smarty_tpl->tpl_vars['trail']->value;?>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
	<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php }?>
<p class="postpage_title">
	<img width="22" class="forumicon" title="<?php echo ucfirst($_smarty_tpl->tpl_vars['data']->value['icon']);?>
" alt="<?php echo ucfirst($_smarty_tpl->tpl_vars['data']->value['icon']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['images_dir'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['icon'];?>
.png">
	<?php echo $_smarty_tpl->tpl_vars['data']->value['prefix'];
echo $_smarty_tpl->tpl_vars['data']->value['header'];?>

</p>
<div class="menu-row">
	
	<?php if (isset($_smarty_tpl->tpl_vars['buttons']->value['tools'])) {?>
		<div class="btn-group pull-right">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				Topic tools <span class="caret"></span>
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
<?php if ($_smarty_tpl->tpl_vars['data']->value['posts']) {?>
	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['post']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['post']->index++;
 $_smarty_tpl->tpl_vars['post']->first = $_smarty_tpl->tpl_vars['post']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posts_array']['first'] = $_smarty_tpl->tpl_vars['post']->first;
?>
		<div class="panel panel-default">
			<div class="panel-heading bold"><?php echo smarty_modifier_timesince($_smarty_tpl->tpl_vars['post']->value['date']);?>

				<span id="post-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="pull-right small">#<?php echo $_smarty_tpl->tpl_vars['post']->value['nr'];?>
</span></div>
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
					<div class="col-lg-10">
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
<!--
<?php if ($_smarty_tpl->tpl_vars['data']->value['posts']) {?>
	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['post']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['post']->index++;
 $_smarty_tpl->tpl_vars['post']->first = $_smarty_tpl->tpl_vars['post']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posts_array']['first'] = $_smarty_tpl->tpl_vars['post']->first;
?>
		<div class="forum-post-wrapper
			<?php if ($_smarty_tpl->tpl_vars['data']->value['solved_post_id']==$_smarty_tpl->tpl_vars['post']->value['id']) {?>forum-solved-post<?php }
ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['thread_starter_id'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['post']->value['user_id']==$_tmp1) {?> thread-starter-reply<?php }?>"
			 id="post_<?php echo $_smarty_tpl->tpl_vars['post']->value['nr'];?>
">
			<div class="bold forum-post-top"><?php echo smarty_modifier_timesince($_smarty_tpl->tpl_vars['post']->value['date']);?>
<span class="post-id-meta small">#<?php echo $_smarty_tpl->tpl_vars['post']->value['nr'];?>
</span>
			</div>
			<div class="forum-left">
				<figure class="forum-figure">
					<?php echo $_smarty_tpl->tpl_vars['post']->value['avatar'];?>

					<figcaption>
						<span class="bold"><?php if ($_smarty_tpl->tpl_vars['post']->value['user']->display_name=='') {?>
							Guest<?php } else {
echo $_smarty_tpl->tpl_vars['post']->value['user']->display_name;?>
</span><br><span class="small">Posts: <?php echo number_format($_smarty_tpl->tpl_vars['post']->value['user']->post_count,0);?>
</span><?php }?>
					</figcaption>
				</figure>
			</div>
			<div class="forum-right <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['posts_array']['first']) {?>forum-post-first<?php }?>">
				<div class="forum-post-meta">
					<p><span class="post-date bold"><?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</span></p>
				</div>
				<div class="forum-post-text">
					<p><?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
</p>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['nr']==1&&isset($_smarty_tpl->tpl_vars['data']->value['solved_text'])) {?>
						<div class="solved-text">
							<p>
								<span class="solved-title"><b><?php echo $_smarty_tpl->tpl_vars['data']->value['solved_title'];?>
</b> by <?php echo $_smarty_tpl->tpl_vars['data']->value['solved_user']->display_name;?>

									, <?php echo smarty_modifier_timesince($_smarty_tpl->tpl_vars['data']->value['solved_date']);?>
</span></p>

							<p><?php echo $_smarty_tpl->tpl_vars['data']->value['solved_text'];?>
</p>
						</div>
					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['post']->value['user']->meta['description']) {?>
					<div class="forum-post-signature border-top">
						<?php echo nl2br($_smarty_tpl->tpl_vars['post']->value['user']->meta['description']);?>

					</div>
				<?php }?>
			</div>
			<div class="forum-post-links">
				<p>
					<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['post_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
						<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>

					<?php } ?>
				</p>
			</div>
		</div>
	<?php } ?>
<?php } else { ?>
	<p class="bold center">No posts yet.</p>
<?php }?>
--><?php }} ?>
