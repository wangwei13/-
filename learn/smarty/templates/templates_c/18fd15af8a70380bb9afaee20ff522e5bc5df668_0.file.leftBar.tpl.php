<?php
/* Smarty version 3.1.29, created on 2017-04-11 10:19:44
  from "D:\www\learn\smarty\templates\templates\leftBar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ec91a035f480_75634664',
  'file_dependency' => 
  array (
    '18fd15af8a70380bb9afaee20ff522e5bc5df668' => 
    array (
      0 => 'D:\\www\\learn\\smarty\\templates\\templates\\leftBar.tpl',
      1 => 1491898782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec91a035f480_75634664 ($_smarty_tpl) {
?>
<div class="leftBar">
    <?php if ($_smarty_tpl->tpl_vars['type']->value == "0") {?>
        <div id="product" class="active">文玩产品</div>
        <div id="note">资讯新闻</div>
        <div id="chat">文玩论坛</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "1") {?>
        <div id="productIn">产品录入</div>
        <div id="noteUpdata">动态资讯</div>
        <div id="chatIn">论坛</div>
        <div id="producltlist" class="active">文玩展示</div>
    <?php }?>
</div><?php }
}
