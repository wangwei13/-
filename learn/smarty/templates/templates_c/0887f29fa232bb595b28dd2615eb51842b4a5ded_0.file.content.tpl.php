<?php
/* Smarty version 3.1.29, created on 2017-04-11 10:19:18
  from "D:\www\learn\smarty\templates\templates\content.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ec9186c0df02_06554144',
  'file_dependency' => 
  array (
    '0887f29fa232bb595b28dd2615eb51842b4a5ded' => 
    array (
      0 => 'D:\\www\\learn\\smarty\\templates\\templates\\content.tpl',
      1 => 1491898741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec9186c0df02_06554144 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['type']->value == "1") {?>
<div class="productIn content">
    <form class="form-horizontal margin-top">
        <div class="row">
            <div class="form-group">
                <label for="name" class="control-label col-sm-3">文玩编号:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="productId" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="name" class="control-label col-sm-3">文玩名称:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="productName">
                </div>
            </div>
        </div>
       <div class="row">
            <div class="form-group">
                <label class="control-label col-sm-3">文玩介绍:</label>
                <div class="col-sm-5">
                    <textarea name="" id="productIntro" cols="53" rows="10" class="intro"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="password" class="control-label col-sm-3">文玩价格:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="productPrice">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="password" class="control-label col-sm-3">文玩图片地址:</label>
                <input type="file" name="fileString" multiple id="file">
                <span class="showImage">
                    <img id="showImage">
                </span>
            </div>
        </div>
        <div class="row margin-top">
            <div class="form-group text-center">
                <div class="col-sm-5">
                    <input class="btn btn-default btn-success" value="保存" style="width: 54px;margin-left: 210px" id="save">
                </div>
                <div class="col-sm-2">
                    <button type="reset" class="btn btn-default btn-primary" style="margin-left: 116px;">重置</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="noteUpdata content">
    动态资讯
</div>
<div class="chatIn content">
</div>
<div class="producltlist content isShow">
    <?php
$_from = $_smarty_tpl->tpl_vars['jarr_obj']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_jarr_0_saved_item = isset($_smarty_tpl->tpl_vars['jarr']) ? $_smarty_tpl->tpl_vars['jarr'] : false;
$_smarty_tpl->tpl_vars['jarr'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['jarr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['jarr']->value) {
$_smarty_tpl->tpl_vars['jarr']->_loop = true;
$__foreach_jarr_0_saved_local_item = $_smarty_tpl->tpl_vars['jarr'];
?>
    <div class="item" >
        <div class="listWrap">
            <img src="../../../../image/<?php echo $_smarty_tpl->tpl_vars['jarr']->value['file'];?>
" alt="">
        </div>
        <div class="introduceItem">
            <label>编号:</label>
            <span><?php echo $_smarty_tpl->tpl_vars['jarr']->value['productId'];?>
</span>
            <br>
            <label>标题:</label>
            <span><?php echo $_smarty_tpl->tpl_vars['jarr']->value['productName'];?>
</span>
            <br>
            <label>价钱:</label>
            <span><?php echo $_smarty_tpl->tpl_vars['jarr']->value['productPrice'];?>
</span>
        </div>
        <div class="describe">
            <label>描述:</label>
            <span><?php echo $_smarty_tpl->tpl_vars['jarr']->value['productIntro'];?>
</span>
            <br>
        </div>
        <div class="act">
            <input type="button" value="修改" class="btn btn-default btn-success" id="change<?php echo $_smarty_tpl->tpl_vars['jarr']->value['productId'];?>
">
            <input type="button" value="删除" class="btn btn-default btn-warning" id="delet<?php echo $_smarty_tpl->tpl_vars['jarr']->value['productId'];?>
">
        </div>
    </div>
    <?php
$_smarty_tpl->tpl_vars['jarr'] = $__foreach_jarr_0_saved_local_item;
}
if ($__foreach_jarr_0_saved_item) {
$_smarty_tpl->tpl_vars['jarr'] = $__foreach_jarr_0_saved_item;
}
?>
</div>
<?php }
}
}