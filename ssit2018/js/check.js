//register
function checkregister(form){
	var a = document.getElementById("cont_mes1").innerHTML;
	if(a=="用户名已存在！"){
		alert("表单内容不符合规范！");
		form.username.focus();
		return false;
	}
	if(form.username.value ==''){
		alert('用户名不能为空！');
		form.username.focus();
		return false;
	}
	if(form.password.value == ''){
		alert('密码不能为空！');
		form.password.focus();
		return false;
	}
	if(form.password1.value == ''){
		alert('确认密码不能为空！');
		form.password1.focus();
		return false;
	}
	if(form.password.value != form.password1.value){
		alert('两次密码不一样！');
		form.password1.focus();
		return false;
	}

	return true;
	
}

//login
function checklogin(form){
	
	if(form.username.value ==''){
		alert('用户名不能为空！');
		form.username.focus();
		return false;
	}
	if(form.password.value == ''){
		alert('密码不能为空！');
		form.password.focus();
		return false;
	}
	return true;
	
}
