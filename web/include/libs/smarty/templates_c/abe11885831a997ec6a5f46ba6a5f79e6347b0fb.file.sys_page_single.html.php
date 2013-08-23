<?php /* Smarty version Smarty-3.1.13, created on 2013-08-23 11:20:47
         compiled from "skins/theme/dtml/it/single/sys_page_single.html" */ ?>
<?php /*%%SmartyHeaderCode:20676391005217296f6d9675-30061023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abe11885831a997ec6a5f46ba6a5f79e6347b0fb' => 
    array (
      0 => 'skins/theme/dtml/it/single/sys_page_single.html',
      1 => 1375871185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20676391005217296f6d9675-30061023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'instances' => 0,
    'instance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5217296f87ffa8_35981749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5217296f87ffa8_35981749')) {function content_5217296f87ffa8_35981749($_smarty_tpl) {?><div id="liveReport">
    bingo
	<!-- MODIFICA QUESTE LINEE-->
SINGLE TEMPLATE STANDARD; <h1>sys_page</h1>
<?php if ($_smarty_tpl->tpl_vars['instances']->value!=null||$_smarty_tpl->tpl_vars['instance']->value!=null){?>
<ul>
<li>id: <?php echo $_smarty_tpl->tpl_vars['instance']->value->id;?>
</li>
<li>owner: <?php echo $_smarty_tpl->tpl_vars['instance']->value->owner;?>
</li>
<li>title: <?php echo $_smarty_tpl->tpl_vars['instance']->value->title;?>
</li>
<li>description: <?php echo $_smarty_tpl->tpl_vars['instance']->value->description;?>
</li>
<li>subtitle: <?php echo $_smarty_tpl->tpl_vars['instance']->value->subtitle;?>
</li>
<li>body: <?php echo $_smarty_tpl->tpl_vars['instance']->value->body;?>
</li>
<li>position: <?php echo $_smarty_tpl->tpl_vars['instance']->value->position;?>
</li>
<li>link: <?php echo $_smarty_tpl->tpl_vars['instance']->value->link;?>
</li>
<li>section: <?php echo $_smarty_tpl->tpl_vars['instance']->value->section;?>
</li>
<li>father: <?php echo $_smarty_tpl->tpl_vars['instance']->value->father;?>
</li>
<li>foto: <?php echo $_smarty_tpl->tpl_vars['instance']->value->foto;?>
</li>
</ul>
<?php }else{ ?>
<h1>NON CI SONO sys_page</h1>
<?php }?>

<!-- MODIFICA QUESTE LINEE-->

</div>

<?php }} ?>