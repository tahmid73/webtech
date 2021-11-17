<?php
    $servername="localhost";
    $user="root";
    $password="";
    $dbname="webtech";
    $connection = new mysqli($servername, $user, $password, $dbname);
    //$pass=$username=$flag="";
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}

?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<fieldset>
                <legend>Login:</legend>
                <label >Username: </label>
                <input type="text" name="username">
                <br>
                <label>Password: </label>
                <input type="password" name="pass" >
                <br>
</fieldset>
                <input type="submit" name="submit">
</form>

    <?php

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
				if($row['username']==$_POST['username'] and $_POST['pass']==$row['pass']){
                    $flag=true;
                    echo "$arr[$i]->username";
                }
			}
		}
		else {
			echo "No records found.";
		}
        if ($flag)
				header("Location:hello.php");
			else 
				echo "try again";
	}



	}