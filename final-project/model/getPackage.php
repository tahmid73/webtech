<?php
include '../model/database.php';

$sql = "SELECT * FROM package";
$result = $connection->query($sql);
$arr1 = array();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			array_push($arr1, 
				array('id' => $row['id'], 'package' => $row['package'], 'speed' => $row['speed'], 'cost' => $row['cost']));
		}
		echo json_encode($arr1);
	}
?>