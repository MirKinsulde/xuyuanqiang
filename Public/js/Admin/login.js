function change_code(obj){
	$("#code").attr("src",URL+Math.random());
	return false;
}
$(function(){
	$("#login").submit(function(){
		//用户名验证
		if ($("input[name='username']").val().trim()=='') {
			alert('用户名不能为空！');
			$("input[name='username']").focus();
			return false;
		}

		//密码验证
		if ($("input[name='password']").val().trim()=='') {
			alert('密码不能为空！');
			$("input[name='password']").focus();
			return false;
		}

		//验证码验证
		if ($("input[name='code']").val().trim()=='') {
			alert('验证码不能为空！');
			$("input[name='code']").focus();
			return false;
		}

		return true;
	})
})
