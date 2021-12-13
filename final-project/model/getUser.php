<?php
include '../model/database.php';

$sql = "SELECT * FROM users";
$result = $connection->query($sql);
$arr1 = array();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			array_push($arr1, 
				array('id' => $row['id'], 'username' => $row['username'], 'firstname' => $row['firstname'], 'lastname' => $row['lastname'], 'address'=> $row['address'], 'password'=>$row['password'], 'phone'=>$row['phone'], 'type'=>$row['type']));
		}
		echo json_encode($arr1);
	}
?>