<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-03 13:57:59
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/search_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27643828554a4185db02540-31171332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62f57c91fcd9047479a360e833a884ef9c54a2da' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/search_result.tpl',
      1 => 1420293212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27643828554a4185db02540-31171332',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a4185db035d6_56629725',
  'variables' => 
  array (
    'search_frase' => 0,
    'data' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a4185db035d6_56629725')) {function content_54a4185db035d6_56629725($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fref/www/wordpress/wp-content/plugins/wpforum/assets/Smarty/libs/plugins/modifier.date_format.php';
?><h3><i class="fa fa-search"></i> &nbsp;Search Results for <?php echo $_smarty_tpl->tpl_vars['search_frase']->value;?>
</h3>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['link_back'];?>
">Advanced search</a></p>
<?php if (isset($_smarty_tpl->tpl_vars['data']->value['error'])) {?>
	<div class="alert alert-warning"><i class="fa fa-warning"></i> &nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['error'];?>
</div>
<?php } else { ?>
	<table border="0" class="forum-table table table-bordered table-striped" cellspacing='0'>

		<?php if ($_smarty_tpl->tpl_vars['data']->value['results']) {?>
			<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
				<tr>
					<td width="80%">
						<p class="forumtitle">
							<b><a class="lead" href="<?php echo $_smarty_tpl->tpl_vars['result']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['subject'];?>
</a></b>
						</p>
						<p>
							<?php echo $_smarty_tpl->tpl_vars['result']->value['text'];?>

						</p>
						<p><i class="fa fa-tags"></i>
							Tags: <?php echo implode(', ',$_smarty_tpl->tpl_vars['data']->value['tags']);?>

						</p>
					</td>
					<td class="small">By: <?php echo $_smarty_tpl->tpl_vars['result']->value['user']->display_name;?>
<br>
						<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['result']->value['date']);?>
<br><br>

						Views: <?php echo number_format($_smarty_tpl->tpl_vars['result']->value['meta']['views']);?>
<br>
						Replies: <?php echo number_format($_smarty_tpl->tpl_vars['result']->value['meta']['replies']);?>

					</td>
				</tr>
			<?php } ?>
		<?php } else { ?>
			<tr>
				<td colspan="2" class="center bold">
					<p>No results met your search criterias.</p>
				</td>
			</tr>
		<?php }?>
	</table>
<?php }?><?php }} ?>
