function change_code(obj){
	$("#code").attr("src",URL+Math.random());
	return false;
}
$(function(){
	//登录表单验证
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

	//注册表单验证
	$("#re g").submit(function(){
		//用户名验证
		if ($("input[name='username']").val().trim()=='') {
			alert('用户名不能为空！');
			$("input[name='username']").focus();
			return false;
		}

		//密码邮箱
		if ($("input[name='email']").val().trim()=='') {
			alert('Email不能为空！');
			$("input[name='email']").focus();
			return false;
		}

		//验证邮箱格式
		 var str = $("input[name='email']").val().trim();
		 var result=str.match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/);
		 if(result==null){
		  alert('邮箱格式不正确');
		  return false;
		} 
		
		//密码验证
		if ($("input[name='password']").val().trim()=='') {
			alert('密码不能为空！');
			$("input[name='password']").focus();
			return false;
		}

		//确认密码验证
		if ($("input[name='nopassword']").val().trim()=='') {
			alert('确认密码不能为空！');
			$("input[name='nopassword']").focus();
			return false;
		}

		//确认密码验证
		if ($("input[name='password']").val().trim() != $("input[name='nopassword']").val().trim()) {
			alert('两次密码不正确！');
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

