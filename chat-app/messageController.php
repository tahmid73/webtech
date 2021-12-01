<?php
$servername="localhost";
$dbUser="root";
$dbPassword="";
$dbname="chat";
$connection = new mysqli($servername, $dbUser, $dbPassword, $dbname);

session_start();
$sender=$_SESSION['username'];

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


$request_method=$_SERVER['REQUEST_METHOD'];
if($request_method==="POST"){ 
        $receiver=$_POST['receiver'];
        $message=$_POST['message'];
        $sql = "INSERT INTO msg (sender, receiver,message,time) VALUES (?, ?, ?, ?)";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param('ssss',$sender,$receiver,$message,time());
			$response=$stmt->execute();
			if ($response) {
				echo "Data Inserted Succssfully";
				header('Location:message.php');
			}
			else {
				echo "Error while saving";
			}
        
}