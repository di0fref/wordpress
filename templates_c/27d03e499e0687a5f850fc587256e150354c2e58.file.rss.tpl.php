<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-27 22:44:38
         compiled from "/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/rss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304601554549eadb91bea96-50857395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27d03e499e0687a5f850fc587256e150354c2e58' => 
    array (
      0 => '/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/rss.tpl',
      1 => 1419720274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304601554549eadb91bea96-50857395',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549eadb93b2089_41459497',
  'variables' => 
  array (
    'data' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549eadb93b2089_41459497')) {function content_549eadb93b2089_41459497($_smarty_tpl) {?>

<?php echo '<?xml';?> version="1.0" encoding="UTF-8" <?php echo '?>';?>

<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<title><?php echo $_smarty_tpl->tpl_vars['data']->value['site_title'];?>
</title>
		<link><?php echo $_smarty_tpl->tpl_vars['data']->value['site_permalink'];?>
</link>
		<description></description>
		<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
			<item>
				<title><?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</title>
				<link><?php echo $_smarty_tpl->tpl_vars['post']->value['permalink'];?>
</link>
				<description><?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
</description>
				<guid><?php echo $_smarty_tpl->tpl_vars['post']->value['permalink'];?>
</guid>
			</item>
		<?php } ?>
	</channel>
	<atom:link href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
" rel="self" type="application/rss+xml" />

</rss><?php }} ?>
