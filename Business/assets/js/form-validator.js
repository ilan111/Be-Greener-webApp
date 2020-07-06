function formValidator(id){
	var countEmplyEle=0;
	$("#"+id+" input.form-control").each(function(){
		if($(this).val()==""){
			$(this).addClass('input-danger')
			++countEmplyEle;
		}else{
			$(this).removeClass('input-danger')
		}
	})
	return countEmplyEle
}

function validateEmail(email) {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(String(email).toLowerCase());
}	