<?php
//dbms
include '../model/getUser.php';

$request_method=$_SERVER['REQUEST_METHOD'];
if($request_method==="POST"){
    $package=$_POST['package'];
    $speed=$_POST['speed'];
    $cost=$_POST['cost'];

    if(empty($package)){
        $firstnameErr="Enter your First name";
    }
    else if(empty($speed)){
        $usernameErr="Enter your username";
    }
    else if(empty($cost)){
        $lastnameErr= "Enter Last name";
    }

    else{
        $sql = "INSERT INTO package (package,speed,cost) VALUES (?,?,?)";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param('ssi',$package,$speed,$cost);
			$response=$stmt->execute();
			if ($response) {
				echo "Data Inserted Succssfully";
			}
			else {
				echo "Error while saving";
			}
        header('Location:../view/addPackage.php');
    }

}