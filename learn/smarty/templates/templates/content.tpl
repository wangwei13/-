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
    <{if $arr|count eq 0}>
    此页无数据
    <{/if}>
    <{foreach from=$arr item=$jarr}>
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
    <ul class="pager">
        <li id="pre"><a>Previous</a></li>
        <li id="next"><a>Next</a></li>
    </ul>
</div>
<{/if}>
<{if $type eq "0"}>
<div class="product content isShow">
    <{if $arr|count eq 0}>
    此页无数据
    <{/if}>
    <{foreach from=$arr item=$jarr}>
    <div class="productItemU">
        <img src="../../../../image/<{$jarr.file}>" alt="">
        <a id="detailbtn<{$jarr.productId}>" data-toggle="modal" data-target="#detail<{$jarr.productId}>">详细信息</a>
    </div>
    <div class="modal fade" id="detail<{$jarr.productId}>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal margin-top">
                    <div class="row">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">文玩名称:</label>
                            <label class="control-label detailfont"><{$jarr.productName}></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">文玩描述:</label>
                            <label class="control-label detailfont"><{$jarr.productIntro}></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">文玩价钱:</label>
                            <label class="control-label detailfont"><{$jarr.productPrice}></label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <{/foreach}>
    <ul class="pager paperSelf">
        <li id="pre"><a>Previous</a></li>
        <li id="next"><a>Next</a></li>
    </ul>
</div>
<div class="note content"></div>
<div class="chat content">
    <div class="chatU">
        <div class="form-group">
            <input type="button" class="btn btn-default btn-info" value="发帖子">
        </div>
        <div class="form-group chatUItem">
            <div class="itemL">
                <div class="itemName">
                    <h5>用户名</h5>
                </div>
                <div class="itemImg">
                    <img src="../../../../image/defaultUser.jpg" alt="头像">
                </div>
            </div>
            <div class="itemR">

            </div>
        </div>
    </div>
</div>
<div class="locateF content">
    <div class="map" id="friendMap"></div>
</div>
    <{/if}>