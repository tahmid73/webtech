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

$sql = "SELECT * FROM msg";
$result = $connection->query($sql);
$arr1 = array();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			array_push($arr1, 
				array('sender' => $row['sender'], 'receiver' => $row['receiver'], 'message' => $row['message'], 'time' => $row['time']));
		}
		echo json_encode($arr1);
	}
?>