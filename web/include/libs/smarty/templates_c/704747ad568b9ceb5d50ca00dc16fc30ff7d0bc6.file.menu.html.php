<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 09:08:00
         compiled from "skins/theme/dtml/it/menu.html" */ ?>
<?php /*%%SmartyHeaderCode:723880131522d73d00194b7-64423465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '704747ad568b9ceb5d50ca00dc16fc30ff7d0bc6' => 
    array (
      0 => 'skins/theme/dtml/it/menu.html',
      1 => 1376057706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '723880131522d73d00194b7-64423465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'instances' => 0,
    'instance' => 0,
    'child_menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d73d0063071_97772612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d73d0063071_97772612')) {function content_522d73d0063071_97772612($_smarty_tpl) {?><div id="navigation" class="clearfix">

    <!-- BEGIN #main-menu -->
    <?php if ($_smarty_tpl->tpl_vars['instances']->value!=null||$_smarty_tpl->tpl_vars['instance']->value!=null){?>
    <ul id="main-menu" class="fl clearfix">
        <?php  $_smarty_tpl->tpl_vars['instance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['instance']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['instances']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['instance']->key => $_smarty_tpl->tpl_vars['instance']->value){
$_smarty_tpl->tpl_vars['instance']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['instance']->value->parent==null){?>
                <li class="current-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['instance']->value->link;?>
"><?php echo $_smarty_tpl->tpl_vars['instance']->value->entry;?>
<span>start here</span></a>
                    <?php if ($_smarty_tpl->tpl_vars['instance']->value->sys_menu!=null){?>
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['child_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child_menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['instance']->value->sys_menu; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child_menu']->key => $_smarty_tpl->tpl_vars['child_menu']->value){
$_smarty_tpl->tpl_vars['child_menu']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['child_menu']->value->linked_page==0){?>
                                    <li class="text_capitalize"><a href="<?php echo $_smarty_tpl->tpl_vars['child_menu']->value->link;?>
"><?php echo $_smarty_tpl->tpl_vars['child_menu']->value->entry;?>

                                    </a></li>
                                    <?php }else{ ?>
                                    <li class="text_capitalize"><a href="page.php?sys_page_id=<?php echo $_smarty_tpl->tpl_vars['child_menu']->value->linked_page;?>
"><?php echo $_smarty_tpl->tpl_vars['child_menu']->value->entry;?>

                                    </a></li>
                                <?php }?>
                            <?php } ?>
                        </ul>
                    <?php }?>
                </li>
            <?php }?>
        <?php } ?>
        <!-- END #main-menu -->
    </ul>
    <?php }?>
    <ul class="main-menu-contact-info fr">
        <li class="info-phone">+39 3479749101</li>
        <li class="info-email">info [at] vecchiaposta [dot] it</li>
    </ul>
    <div class="corner-left"></div>
    <div class="corner-right"></div>
</div>









<!--
 <div id="navigation" class="clearfix">

<ul id="main-menu" class="fl clearfix">
    <li class="current-menu-item"><a href="index.html">Home<span>start here</span></a></li>
    <li><a href="accommodation.html">Camere<span>rates &amp; reservations</span></a>
        <ul>
            <li><a href="accommodation-single.html">Single Standard Room</a></li>
            <li><a href="accommodation-single.html">Double Standard Room</a></li>
            <li><a href="accommodation-single.html">Single Ensuite Room</a>
                <ul>
                    <li><a href="accommodation-single.html">Single Standard Room</a></li>
                    <li><a href="accommodation-single.html">Double Standard Room</a></li>
                    <li><a href="accommodation-single.html">Single Ensuite Room</a>
                </ul>
            </li>
            <li><a href="accommodation-single.html">Double Ensuite Room</a></li>
        </ul>
    </li>
    <li><a href="typography.html">Facilities<span>spa &amp; relaxation</span></a>
        <ul>
            <li><a href="blog.html">Blog</a>
            <li><a href="blog-single.html">Blog Single</a></li>
            <li><a href="testimonials.html">Testimonials</a></li>
            <li><a href="gallery.html">Photo Gallery</a>
            <li><a href="typography.html">Typography</a>
            <li><a href="js-elements.html">JavaScript Elements</a></li>
            <li><a href="left-sidebar.html">Left Sidebar</a></li>
        </ul>
    </li>
    <li><a href="events.html">Eventi<span>what's happening</span></a></li>
    <li><a href="contact.html">Contatti<span>get in touch</span></a></li>
</ul>
<ul class="main-menu-contact-info fr">
    <li class="info-phone">+39 3479749101</li>
    <li class="info-email">info [at] vecchiaposta [dot] it</li>
</ul>
<div class="corner-left"></div>
<div class="corner-right"></div>
</div>
--><?php }} ?>