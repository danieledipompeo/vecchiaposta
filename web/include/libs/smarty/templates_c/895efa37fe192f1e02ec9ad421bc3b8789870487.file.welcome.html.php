<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 17:01:40
         compiled from "skins/theme/dtml/it/welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:1725790153520504546bea73-04360118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '895efa37fe192f1e02ec9ad421bc3b8789870487' => 
    array (
      0 => 'skins/theme/dtml/it/welcome.html',
      1 => 1376042187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1725790153520504546bea73-04360118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'instance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520504546f2499_93866749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520504546f2499_93866749')) {function content_520504546f2499_93866749($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/media/shared/serverweb/vecchiaposta/web/include/libs/smarty/plugins/modifier.truncate.php';
?><h3 class="title1"><?php echo $_smarty_tpl->tpl_vars['instance']->value->title;?>
<span class="title-end"></span></h3>
<p><div class="block-img1"><img src="skins/theme/img/image5.png" alt="" /></div></p>
<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['instance']->value->body,246,"...",true);?>
 </p>
<p><a href="page.php?page_id=<?php echo $_smarty_tpl->tpl_vars['instance']->value->id;?>
" class="button2">Maggiori Informazioni &raquo;</a></p>
<?php }} ?>