<?php /* Smarty version Smarty-3.1.13, created on 2013-09-04 19:20:11
         compiled from "skins/theme/dtml/it/multiple/sys_news_multiple.html" */ ?>
<?php /*%%SmartyHeaderCode:12476218652050454598ac4-79261421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '596540d28c12374aa2155dd33717d7c7747fdebf' => 
    array (
      0 => 'skins/theme/dtml/it/multiple/sys_news_multiple.html',
      1 => 1378300435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12476218652050454598ac4-79261421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520504545e5a90_93094146',
  'variables' => 
  array (
    'instances' => 0,
    'instance' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520504545e5a90_93094146')) {function content_520504545e5a90_93094146($_smarty_tpl) {?><div id="liveReport">
	<!-- MODIFICA QUESTE LINEE-->
MULTIPLE TEMPLATE STANDARD; <h1>sys_news</h1><?php if ($_smarty_tpl->tpl_vars['instances']->value!=null||$_smarty_tpl->tpl_vars['instance']->value!=null){?>
<ul>
<?php  $_smarty_tpl->tpl_vars['instance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['instance']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['instances']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['instance']->key => $_smarty_tpl->tpl_vars['instance']->value){
$_smarty_tpl->tpl_vars['instance']->_loop = true;
?>
<li>id: <?php echo $_smarty_tpl->tpl_vars['instance']->value->id;?>
</li>
<li>owner: <?php echo $_smarty_tpl->tpl_vars['instance']->value->owner;?>
</li>
<li>title: <?php echo $_smarty_tpl->tpl_vars['instance']->value->title;?>
</li>
<li>lastmod: <?php echo $_smarty_tpl->tpl_vars['instance']->value->lastmod;?>
</li>
<li>creation: <?php echo $_smarty_tpl->tpl_vars['instance']->value->creation;?>
</li>
<li>date: <?php echo $_smarty_tpl->tpl_vars['instance']->value->date;?>
</li>
<li>active: <?php echo $_smarty_tpl->tpl_vars['instance']->value->active;?>
</li>
<li>body: <?php echo $_smarty_tpl->tpl_vars['instance']->value->body;?>
</li>
<?php } ?>
</ul>
<?php }else{ ?>
<h1>NON CI SONO sys_news</h1>
<?php }?>
<!-- MODIFICA QUESTELINEE-->

</div>

<?php }} ?>