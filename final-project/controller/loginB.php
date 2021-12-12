<?php
    $flag="";
    //file read
    include '../model/getUser.php';

    if($_SERVER['REQUEST_METHOD'] === "POST" and count($_REQUEST)>0){
        if(empty($username)){
			echo "Enter Username";
		}
		else if(empty($pass)){
			echo "Enter a Password";
            $pass=$_POST['pass'];
		}
        $sql = "SELECT * FROM users";
	    $stmt = $connection->prepare($sql);
	    $response = $stmt->execute();

	if ($response) {
		$data = $stmt->get_result();
        $flag=false;
		if ($data->num_rows > 0) {
			while ($row = $data->fetch_assoc()) {
				if($row['username']==$_POST['username'] and $_POST['password']==$row['password']){
                    $flag=true;
                    if(!isset($_SESSION)) 
					{ 
    					session_start(); 
					} 
                    $_SESSION['username']=$row['username'];
                    $_SESSION['type']=$row['type'];
                    $_SESSION['id']=$row['id'];
                }
			}
		}
		else {
			echo "No records found.";
		}
        if ($flag)
				header("Location:home.php");
			else 
				echo "try again";
	}



	}
    function input($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
?>