/**
 * Created by Dell on 2017/4/7.
 */
var page = {
    init: function () {
        var self = this;
        self.productIn();
        self.addImage();
        self.save();
        self.handle();
        self.productList();
        self.change();
        self.delete();
    },
    productIn: function () {
        $('#productIn').click(function(){

        })
    },
    addImage:function () {
        $('#file').change(function () {
            var imgUrl = $('#file').val();
            console.log(imgUrl);
            var str = imgUrl.split('\\');
            var str = "../image/" + str.pop();
            if(imgUrl != ''){
                $('.showImage').css('display','block');
                $('#showImage').attr('src',str);
            }else{
                $('.showImage').css('display','none');
            }

        })
    },
    save:function () {
        $('#save').click(function () {
            var fileurl = $('#file').val();
            var file = fileurl.split('\\').pop();
            var data = {
                productId:$('#productId').val(),
                productName:$('#productName').val(),
                productIntro:$('#productIntro').val(),
                productPrice:$('#productPrice').val(),
                file:file
            };
            if(!data.productName || !data.productIntro || !data.productPrice || !data.file){
                return false;
            }
            var url = "../controllor/adminSave.php";
            $.post(url,{'data':data},function (res) {
                var res = eval("(" + res + ")");
                if(res.status == 0){
                    alert(res.message);
                }else{
                    alert('录入成功');
                    window.location="";
                }
            })
        })
    },
    handle:function () {
        $('.leftBar div').on('click',function (e) {
            var self = this;
            $('.leftBar div').removeClass('active');
            $(self).addClass('active');
            var id = $(self).attr('id');
            $('.content').removeClass('isShow');
            var str = "." + id;
            $(str).addClass('isShow');
        })
    },
    productList:function(){
        $('#producltlist').click(function () {

        });

    },
    change:function () {
        $("input[id^='change']").click(function () {
            var self = this;
            var id = $(self).attr('id').replace(/change/ig,'');
            var data = {id:id};
            var url = "../controllor/change.php";
            $.post(url,{'data':data},function (res) {
                var res = JSON.parse(res);
                $('#productId').val(res.productId);
                $('#productName').val(res.productName);
                $('#productIntro').val(res.productIntro);
                $('#productPrice').val(res.productPrice);
            });
            $('.producltlist').removeClass('isShow');
            $('.productIn').addClass('isShow');
        })
    },
    delete:function () {
        $("input[id^='delet']").click(function () {
            var self = this;
            var id = $(self).attr('id').replace(/delet/ig,'');
            var data = {id:id};
            var url = "../controllor/delete.php";
            $.post(url,{'data':data},function (res) {
                window.location=""
                $('.productIn').removeClass('isShow');
                $('.producltlist').addClass('isShow');
                $('#productIn').removeClass('active');
                $('#producltlist').addClass('active');
            });
            $('.productIn').removeClass('isShow');
            $('.producltlist').addClass('isShow');
            $('#productIn').removeClass('active');
            $('#producltlist').addClass('active');
        });
    }
}
$(document).ready(function(){
    page.init();
});