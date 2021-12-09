<?php
$servername="localhost";
$user="root";
$password="";
$dbname="isp";
$connection = new mysqli($servername, $user, $password, $dbname);
//$pass=$username=$flag="";
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM users";
$result = $connection->query($sql);
$arr1 = array();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			array_push($arr1, 
				array('id' => $row['id'], 'username' => $row['username'], 'firstname' => $row['firstname'], 'lastname' => $row['lastname'], 'address'=> $row['address'], 'password'=>$row['password'], 'phone'=>$row['phone'], 'type'=>$row['type']));
		}
		$arr1= json_encode($arr1);
	}
?>