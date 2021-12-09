<?php
include '../model/getUser.php';

$request_method=$_SERVER['REQUEST_METHOD'];
if($request_method==="POST"){
    $username=$_POST['username'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $type="customer";
    if(empty($firstname)||$firstname==="First Name"){
        echo "Enter your First name";
    }
    else if(empty($username)||$username==="User Name"){
        echo "Enter your username";
    }
    else if(empty($lastname)||$lastname==="Last Name"){
        echo "Enter Last name<br>";
    }
    else if(empty($address||$address==="Address")){
        echo "Enter your address<br>";
    }
    else if(empty($password)||$password==="Password"){
        echo "Enter Your password <br>";
    }
    else if(empty($phone) ||$phone==="Phone"){
        echo "Enter your phone no<br>";
    }
    else{
        $sql = "INSERT INTO users (username,firstname,lastname,address,password,phone,type) VALUES (?, ?, ?, ?, ?, ?, ?)";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param('sssssss',$username,$firstname,$lastname,$address,$password,$phone,$type);
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