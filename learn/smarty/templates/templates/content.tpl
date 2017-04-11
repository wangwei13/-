<{if $type eq "1"}>
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
    <{foreach from=$jarr_obj item=$jarr}>
    <div class="item" >
        <div class="listWrap">
            <img src="../../../../image/<{$jarr.file}>" alt="">
        </div>
        <div class="introduceItem">
            <label>编号:</label>
            <span><{$jarr.productId}></span>
            <br>
            <label>标题:</label>
            <span><{$jarr.productName}></span>
            <br>
            <label>价钱:</label>
            <span><{$jarr.productPrice}></span>
        </div>
        <div class="describe">
            <label>描述:</label>
            <span><{$jarr.productIntro}></span>
            <br>
        </div>
        <div class="act">
            <input type="button" value="修改" class="btn btn-default btn-success" id="change<{$jarr.productId}>">
            <input type="button" value="删除" class="btn btn-default btn-warning" id="delet<{$jarr.productId}>">
        </div>
    </div>
    <{/foreach}>
    <div id="paga"></div>
</div>
<{/if}>
