<?php 
	$request_method= $_SERVER['REQUEST_METHOD'];
	$fName=$lName=$gender=$dob=$religion=$email=$username=$pass="";
	if($request_method==="POST"){

		$fName=$_POST["fName"];
		$lName=$_POST["lName"];
		$gender=$_POST["gender"];
		$dob=$_POST["dob"];
		$religion=$_POST["Religion"];
		$email=$_POST["email"];
		$username=$_POST["username"];
		$pass=$_POST["pass"];

		if(empty($fName)){
			echo "Enter First name<br>";
		}
		else if(empty($lName)){
			echo "Enter Last name<br>";
		}
		else if(empty($dob)){
			echo "Enter Date of Birth<br>";
		}
		else if(empty($gender)){
			echo "Enter Your gender <br>";
		}
		else if(empty($religion)){
			echo "Enter your Religion<br>";
		}
		else if(empty($email)){
			echo "Enter Your Email";
		}
		else if(empty($username)){
			echo "Enter Username";
		}
		else if(empty($pass)){
			echo "Enter a Password";
		}
		else{
			echo 
			"
			First Name: $fName<br>
			Last Name: $lName<br>
			Gender: $gender<br>
			Date Of birth: $dob<br>
			Religion: $religion<br>
			Email: $email<br>
			Username: $username<br>
			";
		}
	}
?>