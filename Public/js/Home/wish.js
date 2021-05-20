function change_code(obj){
	$("#code").attr("src",URL+Math.random());
	return false;
}
var URL = '/Index/Index/verify/';

$(function(){
	//登录表单验证
	$("#wishform").submit(function(){

		var str = $("textarea[name='content']").val();
		var result=str.match(/www|.com|管理员/);
		if(result){
		  alert('请不要填写网址等非法字符！');
		  return false;
		} 

		if(str.length >60){
		  alert('许愿内容不得大于60个字符！');
		  return false;
		}
		

		//用户名验证
		if ($("input[name='fromname']").val().trim()=='') {
			alert('称呼不能为空！');
			$("input[name='fromname']").focus();
			return false;
		}

		//密码验证
		if ($("textarea[name='content']").val().trim()=='') {
			alert('内容不得为空！');
			$("textarea[name='content']").focus();
			return false;
		}

		

		//验证码验证
		if ($("input[name='code']").val().trim()=='' || $("input[name='code']").val().length !=8) {
			alert('验证码不能为空或位数不对！');
			$("input[name='code']").focus();
			return false;
		}

		return true;
	})

})
