function isValidReg(regForm) 
{
	const username = regForm.username.value;
	const password = regForm.password.value;
	const email = regForm.email.value;
	const flag= false;

	if(username==="" || password==="" || email===""){
		if (username==="") {
			document.getElementById("usernameErr").innerHTML = "Please Enter you username";
		}
		if(password==="" ){
			document.getElementById("passwordErr").innerHTML="Please Enter your password";
		}
		if(email===""){
			document.getElementById("emailErr").innerHTML="Please Enter your email";
		}
		return false;
	}
	return true;
}

function isValidLog(logForm) 
{
	const username = logForm.username.value;
	const password = logForm.password.value;

	if(username==="" && password===""){
		if (username==="") {
			document.getElementById("usernameErr").innerHTML = "Please Enter you username";
		}
		if(password==="" ){
			document.getElementById("passwordErr").innerHTML="Please Enter your password";
		}
		return false;
	}
	return true;
}