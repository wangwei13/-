<?php
/* Smarty version 3.1.29, created on 2017-04-06 10:00:06
  from "D:\www\learn\smarty\templates\templates\homePage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58e5f58697b679_09396510',
  'file_dependency' => 
  array (
    'df92ef2d2d02db1b205a1905df92f6690a9e0916' => 
    array (
      0 => 'D:\\www\\learn\\smarty\\templates\\templates\\homePage.tpl',
      1 => 1491465580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5f58697b679_09396510 ($_smarty_tpl) {
?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="textl logoname">
            <a class="navbar-brand" href="#">文玩小馆</a>
        </div>
        <div class="textr username">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">我的信息</a></li>
                        <li><a href="#">退出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav><?php }
}
