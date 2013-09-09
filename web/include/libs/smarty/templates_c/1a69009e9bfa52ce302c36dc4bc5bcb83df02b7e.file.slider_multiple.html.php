<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 14:42:58
         compiled from "skins/theme/dtml/it/multiple/slider_multiple.html" */ ?>
<?php /*%%SmartyHeaderCode:869810903522dc25236f660-95357476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a69009e9bfa52ce302c36dc4bc5bcb83df02b7e' => 
    array (
      0 => 'skins/theme/dtml/it/multiple/slider_multiple.html',
      1 => 1376056433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '869810903522dc25236f660-95357476',
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
  'unifunc' => 'content_522dc2523a15e4_37221933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522dc2523a15e4_37221933')) {function content_522dc2523a15e4_37221933($_smarty_tpl) {?>    <!-- BEGIN .slides_container -->
    <div class="slides_container">

        <div class="slide">
            <img src="skins/theme/img/beb/IMG_6564.jpg" alt="" />
            <div class="caption">fiori</div>
        </div>

        <div class="slide">
            <a href="accommodation-single.html"><img src="skins/theme/img/beb/IMG_6572.jpg" alt="" /></a>
            <div class="caption">prova</div>
        </div>

        <div class="slide">
            <a href="accommodation-single.html"><img src="skins/theme/img/beb/IMG_6630.jpg" alt="" /></a>
            <div class="caption">prova2</div>
        </div>

        <div class="slide">
            <a href="accommodation-single.html"><img src="skins/theme/img/beb/IMG_6636.jpg" alt="" /></a>
            <div class="caption">prova3</div>
        </div>
        <!-- END .slides_container -->
    </div>

    <a href="#" class="prev">Previous</a>
    <a href="#" class="next">Next</a>

    <!-- BEGIN .booknow -->
    <div class="booknow">
        <form class="booking-form" name="bookroom" action="booking.html" method="post">
            <div class="select-wrapper">
                <select id="room" name="room">
                    <option>Select a Room...</option>
                    <option>Single Standard Room</option>
                    <option>Double Standard Room</option>
                    <option>Single Ensuite Room</option>
                    <option>Double Ensuite Room</option>
                </select>
            </div>
            <div class="clearfix">
                <input type="text" id="datefrom" value="From" class="input-half datepicker">
                <input type="text" id="dateto" value="To" class="input-half input-half-last datepicker">
            </div>
            <input class="bookbutton" type="submit" value="Book Now" />
        </form>
        <div class="corner-left"></div>
        <!-- END .booknow -->
    </div>


<!-- div id="liveReport">
	<-- MODIFICA QUESTE LINEE->
MULTIPLE TEMPLATE STANDARD; <h1>slider</h1><?php if ($_smarty_tpl->tpl_vars['instances']->value!=null||$_smarty_tpl->tpl_vars['instance']->value!=null){?>
<ul>
<?php  $_smarty_tpl->tpl_vars['instance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['instance']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['instances']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['instance']->key => $_smarty_tpl->tpl_vars['instance']->value){
$_smarty_tpl->tpl_vars['instance']->_loop = true;
?>
<li>id: <?php echo $_smarty_tpl->tpl_vars['instance']->value->id;?>
</li>
<li>titolo: <?php echo $_smarty_tpl->tpl_vars['instance']->value->titolo;?>
</li>
<li>descrizione: <?php echo $_smarty_tpl->tpl_vars['instance']->value->descrizione;?>
</li>
<li>effetto: <?php echo $_smarty_tpl->tpl_vars['instance']->value->effetto;?>
</li>
<li>width: <?php echo $_smarty_tpl->tpl_vars['instance']->value->width;?>
</li>
<li>height: <?php echo $_smarty_tpl->tpl_vars['instance']->value->height;?>
</li>
<li>foto: <?php echo $_smarty_tpl->tpl_vars['instance']->value->foto;?>
</li>
<?php } ?>
</ul>
<?php }else{ ?>
<h1>NON CI SONO slider</h1>
<?php }?>
<!-- MODIFICA QUESTELINEE-->

</div-->

<?php }} ?>