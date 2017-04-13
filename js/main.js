/**
 * Created by Dell on 2017/3/9.
 */
var page = {
	init:function(){
		var self = this;
        self.login();
        self.regist();
	},
	login:function(){
        $('#loginbtn').click(function () {
            var data = {
                'username':$('#myModal input').eq(0).val(),
                'password':$('#myModal input').eq(1).val()
            };

            if(!data.username || !data.password){
                return false;
            }
            var url = "../controllor/login.php";
            $.post(url,{'data':data},function (res) {
                var res = eval("(" + res + ")");
                if(res.status == 0){
                    alert(res.message);
                }else{
                    alert('登录成功');
                    if (res.type == 0){
                        window.location="../controllor/pageHome.php?userName="+data.username+"&page=1";
                    }else{
                        window.location="../controllor/admin.php?userName="+data.username+"&page=1";
                    }

                }
            })
        })
	},
    regist:function() {
        $('#regist').click(function () {
            if (!page.userNameBlur() || !page.passwordBlur() || !page.passwordBlurAgain() || !page.addressBlur()){
                return false;
            }
			var data = {
				'username': $("#myModalRegister input").eq(0).val(),
				'password': $("#myModalRegister input").eq(1).val(),
				'address': $("#myModalRegister select").eq(0).val(),
			};
            console.log(data);
			var url = "../controllor/regist.php";
            $.post(url, {'data': data}, function(res) {//注意jquery的$.post的第2个参数必须是键值对形式
                var res = eval("(" + res + ")");
                if(res.status == 0){
                    alert(res.message);
                }else{
                    alert('注册成功');
                    window.location="";
                }
            });
    	})
	},
    userNameFocus:function () {
		var username = $('#username');
        username.removeClass('error_prompt');
		username.addClass('import_prompt');
        username.html('1、由字母、数字、下划线、点、减号组成<br/>2、只能以数字、字母开头或结尾，且长度为4-18');
    },
    userNameBlur:function () {
        var username = $('#username');
        var usernameId = $('#usernameId');
        var reg=/^[0-9a-zA-Z][0-9a-zA-Z_.-]{2,16}[0-9a-zA-Z]$/;
        if(usernameId.val() == ""){
        	username.removeClass('import_prompt');
        	username.addClass('error_prompt')
			username.html('用户名不能为空');
        	return false;
		}
		if(reg.test(usernameId.val()) == false){
            username.removeClass('import_prompt');
            username.addClass("error_prompt");
            username.html("1、由字母、数字、下划线、点、减号组成<br/>2、只能以数字、字母开头或结尾，且长度为4-18");
            return false;
		}
        username.html("");
        username.removeClass('import_prompt');
        return true;
    },
    passwordFocus:function () {
        var password = $('#passwordfir');
        password.removeClass('error_prompt');
        password.addClass('import_prompt');
        password.html('密码长度为6-16');
    },
    passwordBlur:function () {
		var password = $('#passwordfir');
		var passwordId = $('#passwordId');
		if(passwordId.val() == ""){
            password.removeClass('import_prompt');
            password.addClass('error_prompt')
            password.html('密码不能为空');
            return false;
		}
		if(passwordId.val().length < 6 || passwordId.val().length > 16){
            password.removeClass('import_prompt');
            password.addClass('error_prompt')
            password.html('密码长度为6-16');
            return false;
		}
        password.removeClass("ok_prompt");
        password.removeClass("import_prompt");
        password.html("");
        return true;
    },
    passwordBlurAgain:function(){
		var passwordBlurAgain = $('#passwordreqAgain');
		var passwordAgainId = $('#passwordAgainId');
        var passwordId = $('#passwordId');
		if(passwordAgainId.val() != passwordId.val()){
            passwordBlurAgain.removeClass('import_prompt');
            passwordBlurAgain.addClass('error_prompt')
            passwordBlurAgain.html('两次密码输入不一致');
            return false;
		}
		passwordBlurAgain.html("");
		passwordBlurAgain.removeClass('error_prompt');
		passwordBlurAgain.removeClass('import_prompt');
        return true;
	},
    addressBlur:function(){
        var addressId = $('#address');
        var addressText = $('#addressreq');
        if(addressId.val() == ''){
            addressText.removeClass();
            addressText.addClass('error_prompt');
            addressText.html('请选择地址');
            return false;
        }
        addressText.html('');
        addressText.removeClass('error_prompt');
        return true;
    }
}
page.init();
window.userNameFocus = page.userNameFocus;
window.userNameBlur = page.userNameBlur;
window.passwordFocus = page.passwordFocus;
window.passwordBlur = page.passwordBlur;
window.passwordBlurAgain = page.passwordBlurAgain;