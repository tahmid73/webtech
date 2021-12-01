<?php 
	if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		$email = $_POST["email"];

		if (empty($username) || empty($password) || empty($email) ) {
			echo "Please fill up the form properly.";
		}
		else {
			echo "Successfully Saved.";
		}
	}

$servername="localhost";
$dbUser="root";
$dbPassword="";
$dbname="chat";
$connection = new mysqli($servername, $dbUser, $dbPassword, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


$request_method=$_SERVER['REQUEST_METHOD'];
if($request_method==="POST"){ 
        $sql = "INSERT INTO users (username,pass,email) VALUES (?, ?, ?)";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param('sss',$username,$password,$email);
			$response=$stmt->execute();
			if ($response) {
				echo "Data Inserted Succssfully";
				header('Location:login.php');
			}
			else {
				echo "Error while saving";
			}
        
}
?>