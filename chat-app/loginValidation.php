<?php 
	if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		$username = $_POST["username"];
		$password = $_POST["password"];

		if (empty($username) || empty($password) ) {
			echo "Please fill up the form properly.";
		}
	}

    $flag="";
    //file read
    $servername="localhost";
    $user="root";
    $password="";
    $dbname="chat";
    $connection = new mysqli($servername, $user, $password, $dbname);
    //$pass=$username=$flag="";
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}

    if($_SERVER['REQUEST_METHOD'] === "POST" and count($_REQUEST)>0){
        $sql = "SELECT * FROM users";
	    $stmt = $connection->prepare($sql);
	    $response = $stmt->execute();

	if ($response) {
		$data = $stmt->get_result();
        $flag=false;
		if ($data->num_rows > 0) {
			while ($row = $data->fetch_assoc()) {
				if($row['username']==$_POST['username'] and $_POST['password']==$row['pass']){
                    $flag=true;
                    session_start();
                    $_SESSION['username']=$row['username'];
			}
		}
	}
		else {
			echo "No records found.";
		}
        if ($flag)
				header("Location:message.php");
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