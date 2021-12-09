function isValidReg(regForm) 
{
	const username = regForm.username.value;
	const firstname=regForm.firstname.value;
	const lastname=regForm.lastname.value;
	const address=regForm.address.value;
	const phone=regForm.phone.value;
	const password = regForm.password.value;
	const flag= false;

	if(username==="" ||username==="User Name" || password==="" ||firstname==="" || lastname==="" || address==="" ||phone==="" || firstname==="First Name" || lastname==="Last Name" || address==="Address" ||phone==="phone" || password==="Password"){
		if (username==="" ||username==="User Name") {
			document.getElementById("usernameErr").innerHTML = "Please Enter you username";
		}
		if(password==="" ){
			document.getElementById("passwordErr").innerHTML="Please Enter your password";
		}
		if(address===""){
			document.getElementById("addressErr").innerHTML="Please Enter your address";
		}
		if(firstname=""){
			document.getElementById("firstnameErr").innerHTML="Please Enter your First Name";
		}
		if(lastname="" || lastname==="Last Name"){
			document.getElementById("lastnameErr").innerHTML="Please Enter your Last name";
		}
		if(phone=""){
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

var myVar=setInterval(showMsg,1000);
function showMsg() {
  var username="<?php echo $username; ?>"
				$.get("getMsg.php",function(data, status) {
					const users = JSON.parse(data);
					let tableData = "<tbody>";
					for (let i = 0; i < users.length; i++) {
            if(users[i].sender===username||users[i].receiver===username){
						tableData += "<tr>" + 
						"<td>" + users[i].sender + "</td>" + 
						"<td>" + users[i].receiver + "</td>" +
						"<td>" + users[i].message + "</td>" + 
						"<td>" + users[i].time + "</td>" + 
						"</tr>";
          }
					}
					tableData += "</tbody>";
					let table = "<table border='1'>" +
						"<thead>" +
						"<tr>" +
						"<td>" + "Sender" + "</td>" + 
						"<td>" + "Receiver" + "</td>" + 
						"<td>" + "Message" + "</td>" + 
						"<td>" + "Time" + "</td>" + 
						"</tr>" + 
						"</thead>" +  
						tableData + 
					"</table>";
          "print"
					$("#i3").html(table);
				});
			}
function getMsg(){
  myVar
}