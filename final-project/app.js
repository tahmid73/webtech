function isValidReg(regForm) 
{
	const username = regForm.username.value;
	const firstname=regForm.firstname.value;
	const lastname=regForm.lastname.value;
	const address=regForm.address.value;
	const phone=regForm.phone.value;
	const password = regForm.password.value;
	const flag= false;
	if(username==="" ||username==="User Name" || password==="" ||firstname==="" || lastname==="" || address==="" ||phone==="" || 
	firstname==="First Name" || lastname==="Last Name" || address==="Address" ||phone==="phone" || password==="Password"){
		if (username==="" ||username==="User Name") {
			document.getElementById("usernameErr").innerHTML = "Please Enter you username";
		}
		if(password==="" ||password==="Password"){
			document.getElementById("passwordErr").innerHTML="Please Enter your password";
		}
		if(address==="" || address==="Address"){
			document.getElementById("addressErr").innerHTML="Please Enter your address";
		}
		if(firstname==="" ||firstname==="First Name"){
			document.getElementById("firstnameErr").innerHTML="Please Enter your First Name";
		}
		if(lastname==="" || lastname==="Last Name"){
			document.getElementById("lastnameErr").innerHTML="Please Enter your Last name";
		}
		if(phone==="" || phone==="Phone"){
			document.getElementById("phoneErr").innerHTML="Please Enter your Phone Number";
		}
		return false;
	}
	return true;
}

function isValidLog(logForm) 
{
	const username = logForm.username.value;
	const password = logForm.password.value;

	if(username==="" || password===""||username==="User Name"||password==="Password"){
		if (username===""||username==="Username") {
			document.getElementById("usernameErr").innerHTML = "Please Enter you username";
		}
		if(password===""||password==="Password" ){
			document.getElementById("passwordErr").innerHTML="Please Enter your password";
		}
		return false;
	}
	return true;
}

function showUsers() {
				$.get("getUser.php",function(data, status) {
					const users = JSON.parse(data);
					console.log(users[1].username);
					return users;
				});
			}
function getMsg(){
  myVar
}