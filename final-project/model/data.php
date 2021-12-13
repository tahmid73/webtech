<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
	<link rel="stylesheet" href="./css/users.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
</body>
</html>
<script>
    var myVar=setInterval(showUsers,1000);
function showUsers() {
				$.get("../model/getUser.php",function(data, status) {
					const users = JSON.parse(data);
					let tableData = "<tbody>";
					for (let i = 0; i < users.length; i++) {
						<?php $userId="<script>user[i].id</script>"?>
						tableData += "<tr>" + 
						"<td>" + users[i].id + "</td>" +
						"<td>" + users[i].username + "</td>" + 
						"<td>" + users[i].firstname + "</td>" +
						"<td>" + users[i].lastname + "</td>" + 
						"<td>" + users[i].phone + "</td>" +
						"<td>" + users[i].type + "</td>" + 
						"<td><button class='deleteBtn' id='"+users[i].id+"' onclick='deleteUser("+users[i].id+")'>Delete</button></td>" + 
						"</tr>";
					}
					tableData += "</tbody>";
					let table = "<table border='1'>" +
						"<thead>" +
						"<tr>" +
						"<td>" + "Id" + "</td>" +
						"<td>" + "Username" + "</td>" + 
						"<td>" + "First Name" + "</td>" + 
						"<td>" + "Last Name" + "</td>" + 
						"<td>" + "Phone" + "</td>" + 
						"<td>" + "User Type" + "</td>" + 
						"<td>" + "Delete" + "</td>" + 
						"</tr>" + 
						"</thead>" +  
						tableData + 
					"</table>";
          "print"
					$("#i3").html(table);
				});
			}
function getUsers(){
  myVar
}

function deleteUser(id){
	var userId=id;
	$.ajax({
		url:"../model/userDelete.php",
		type:"POST",
		data:{id:userId},
		success:function(data){
			alert("deleted");
		}
	})
}
</script>