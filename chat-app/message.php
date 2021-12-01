<?php
    $servername="localhost";
    $user="root";
    $password="";
    $dbname="chat";
    $connection = new mysqli($servername, $user, $password, $dbname);
    //$pass=$username=$flag="";
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}
  session_start();
  $username=$_SESSION['username'];

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Message</title>
    <script src="jsValidation.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <a id="usernameErr"></a>
    <form action="messageController.php" method="post">
        <input type="text" name="message" id="message">
        <input type="submit" value="Send">
        <select name="receiver" id="receiver">
        <?php
        $sql = "SELECT * FROM users WHERE NOT username='$username' ";
	    $stmt = $connection->prepare($sql);
	    $response = $stmt->execute();

	if ($response) {
		$data = $stmt->get_result();
        $flag=false;
		if ($data->num_rows > 0) {
			while ($row = $data->fetch_assoc()) {
                $user=$row['username'];
        ?>
				<option value="<?php echo $user ?>"><?php echo $user ?></option>
            <?php		
            }
	    }
		else {
			echo "No user found.";
		}
	}
?>
        </select>
    </form>

<p id="i3"></p>

<a href="logout.php">Logout</a>
</body>
</html>


<script>
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
</script>

