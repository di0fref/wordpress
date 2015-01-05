<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-31 12:25:59
         compiled from "/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/rss_forum.xml" */ ?>
<?php /*%%SmartyHeaderCode:21647312754a3eb57dd61b8-72003979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73ef76fbe0ae96c527ddab64498576a76f3b3a81' => 
    array (
      0 => '/Users/fref/www/wordpress/wp-content/plugins/wpforum//tpls/rss_forum.xml',
      1 => 1419953692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21647312754a3eb57dd61b8-72003979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'thread' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a3eb57eb4d67_92611736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a3eb57eb4d67_92611736')) {function content_54a3eb57eb4d67_92611736($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>

<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title><?php echo $_smarty_tpl->tpl_vars['data']->value['site_title'];?>
 Forum: <?php echo $_smarty_tpl->tpl_vars['data']->value['forum']['name'];?>
</title>
        <link><?php echo $_smarty_tpl->tpl_vars['data']->value['site_permalink'];?>
</link>
        <description><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</description>
        <?php  $_smarty_tpl->tpl_vars['thread'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thread']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['threads']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->key => $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->_loop = true;
?>
        <item>
            <title><?php echo $_smarty_tpl->tpl_vars['thread']->value['subject'];?>
</title>
            <link><?php echo $_smarty_tpl->tpl_vars['thread']->value['permalink'];?>
</link>
            <description><?php echo $_smarty_tpl->tpl_vars['thread']->value['text'];?>
</description>
            <guid><?php echo $_smarty_tpl->tpl_vars['thread']->value['permalink'];?>
</guid>
        </item>
        <?php } ?>
    </channel>
</rss><?php }} ?>
