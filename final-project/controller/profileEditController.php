<?php
//dbms
session_start();
$id=$_SESSION['id'];
$servername="localhost";
$dbUser="root";
$dbPassword="";
$dbname="isp";
$connection = new mysqli($servername, $dbUser, $dbPassword, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


$request_method=$_SERVER['REQUEST_METHOD'];
if($request_method==="POST"){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    if(empty($firstname)){
        echo "Enter your First name";
    }
    else if(empty($lastname)){
        echo "Enter Last name<br>";
    }
    else if(empty($address)){
        echo "Enter your address<br>";
    }
    else if(empty($password)){
        echo "Enter Your password <br>";
    }
    else if(empty($phone)){
        echo "Enter your phone no<br>";
    }
    else{
        $sql = "UPDATE users (firstname,lastname,address,password,phone) VALUES (?, ?, ?, ?, ?) WHERE ID=.".$id."";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param('sssss',$firstname,$lastname,$address,$password,$phone);
			$response=$stmt->execute();
			if ($response) {
				echo "Data Inserted Succssfully";
			}
			else {
				echo "Error while saving";
			}
        header('Location:../view/login.php');
    }

}