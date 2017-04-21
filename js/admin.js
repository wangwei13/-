/**
 * Created by Dell on 2017/4/7.
 */
var page = {
    init: function () {
        var self = this;
        if(window.location.href.indexOf('admin') < 0){
            self.handle();
            self.productShow();
            self.map();
        }else{
            self.addImage();
            self.save();
            self.handle();
            self.change();
            self.delete();
            self.render();
        }
        self.exit();

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
            $('#productId').val('');
            $('#productName').val('');
            $('#productIntro').val('');
            $('#productPrice').val('');
            $('.leftBar div').removeClass('active');
            $(self).addClass('active');
            var id = $(self).attr('id');
            $('.content').removeClass('isShow');
            var str = "." + id;
            $(str).addClass('isShow');
        })
    },
    productList:function(page){
        var url ="../controllor/admin.php?username=admin&page=" +page;
        var currentPage = window.location.href.split('page=')[1];
        if(currentPage != page){
            window.location.href=url;
        }else{
            window.location.reload();
        }
    },
    render:function () {
        var url ="../controllor/admin.php?username=admin&page=" +page;
        var currentPage = window.location.href.split('page=')[1];
        var self = this;
        $('#pre').click(function () {
            if(currentPage == 1){
                return;
            }else{
                currentPage--;
                self.productList(currentPage);
            }
        });
        $('#next').click(function () {
            currentPage++;
            self.productList(currentPage);
        })
    },
    change:function () {
        $("input[id^='change']").click(function () {
            var self = this;
            var id = $(self).attr('id').replace(/change/ig,'');
            var data = {id:id};
            var url = "../controllor/change.php";
            $.ajax({
                type:"POST",
                url:url,
                dataType: "json",
                data:data,
                success:function (res) {
                    $('#productId').val(res.productId);
                    $('#productName').val(res.productName);
                    $('#productIntro').val(res.productIntro);
                    $('#productPrice').val(res.productPrice);
                }
            })
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
    },
    productShow: function (page) {
        var username = window.location.href.split('=')[1];
        username = username.split('&')[0];
        var url ="../controllor/pageHome.php?username=" + username + "&page=" +page;
        var currentPage = window.location.href.split('page=')[1];
        var self = this;
        $('#pre').click(function () {
            if(currentPage == 1){
                return;
            }else{
                currentPage--;
                self.productShowList(currentPage);
            }
        });
        $('#next').click(function () {
            currentPage++;
            self.productShowList(currentPage);
        })
    },
    productShowList: function (page) {
        var username = window.location.href.split('=')[1];
        username = username.split('&')[0];
        var url ="../controllor/pageHome.php?username=" + username + "&page=" +page;
        var currentPage = window.location.href.split('page=')[1];
        if(currentPage != page){
            window.location.href=url;
        }else{
            window.location.reload();
        }
    },
    map: function () {
        $('#locateF').click(function () {
            var self = this;
            var username = window.location.href.split('userName=')[1];
            var username = username.split('&')[0];
            var data = {username:username};
            var url = "../controllor/map.php";
            $.ajax({
                type:"POST",
                url:url,
                data:data,
                success:function (data) {
                    console.log(data['$xj']);
                }
            })
        })
        var friendMap  = echarts.init(document.getElementById('friendMap'));
        option = {
            tooltip: {
                trigger: 'item',
                formatter: function (data) {
                    var str;
                    if( isNaN(data.value) ){
                        str = "共0人"
                    }else{
                        str="共" + data.value + "人"
                    }
                    return str;
                }
            },
            series: [
                {
                    name: '中国',
                    type: 'map',
                    mapType: 'china',
                    selectedMode : 'multiple',
                    label: {
                        normal: {
                            show: true
                        },
                        emphasis: {
                            show: true
                        }
                    },
                    data:[
                        {name:'广东', value:12, selected:true},
                        {name:'北京', value:12, selected:true}
                    ]
                }
            ]
        };
        friendMap.setOption(option);

    },
    exit: function () {
        $('#exit').click(function () {
            window.location="../index.html";
        })
    }
}
$(document).ready(function(){
    page.init();
});