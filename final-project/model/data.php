<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="../app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
</body>
</html>

<script>
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
</script>