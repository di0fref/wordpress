<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-27 23:07:23
         compiled from "/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/rss.xml" */ ?>
<?php /*%%SmartyHeaderCode:543949329549f36b5cdbed8-06740881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eebe868726799d514f82de27ba7de45f2798f7b' => 
    array (
      0 => '/Users/fredrik/www/wordpress/wp-content/plugins/wpforum//tpls/rss.xml',
      1 => 1419721587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '543949329549f36b5cdbed8-06740881',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549f36b5d4d086_80305122',
  'variables' => 
  array (
    'data' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549f36b5d4d086_80305122')) {function content_549f36b5d4d086_80305122($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>

<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title><?php echo $_smarty_tpl->tpl_vars['data']->value['site_title'];?>
</title>
        <link><?php echo $_smarty_tpl->tpl_vars['data']->value['site_permalink'];?>
</link>
        <description><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</description>
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
</rss><?php }} ?>
