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