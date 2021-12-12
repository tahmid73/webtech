<?php 
include './components/loggedHeader.php';
echo "<br>";
session_start();
$username=$_SESSION['username'];

//file read
$flag="";
    $servername="localhost";
    $user="root";
    $password="";
    $dbname="isp";
    $connection = new mysqli($servername, $user, $password, $dbname);
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}
        $sql = "SELECT * FROM users";
	    $stmt = $connection->prepare($sql);
	    $response = $stmt->execute();

	if ($response) {
		$data = $stmt->get_result();
        $flag=false;
    if ($data->num_rows > 0) {
        while ($row = $data->fetch_assoc()) {
            if($row['username']===$username){
                //$flag=true;
        ?>
            <form action="../controller/profileEditController.php" method="post">
                <fieldset>
                    <legend>
                        <h1>Hello, <?php echo $row['username'] ?></h1>
                    </legend>
                    <fieldset>
                        <legend>
                            First Name:
                        </legend>
                        <input type="text" name="firstname" value="<?php echo $row['firstname'] ?>" >
                    </fieldset>
                    <fieldset>
                        <legend>
                            Last Name:
                        </legend>
                        <input type="text" name="lastname" value="<?php echo $row['lastname'] ?>" >
                    </fieldset>
                    <fieldset>
                        <legend>
                            Address:
                        </legend>
                        <input type="text" name="address" value="<?php echo $row['address'] ?>" >
                    </fieldset>
                    <fieldset>
                        <legend>
                            Phone No:
                        </legend>
                        <input type="text" name="phone" value="<?php echo $row['phone'] ?>" >
                    </fieldset>
                    <fieldset>
                        <legend>
                            Password:
                        </legend>
                        <input type="password" name="password" value="<?php echo $row['password'] ?>" >
                    </fieldset>
                    <input type="submit" value="Save">
                </fieldset>
            </form>
<?php   }
    

        }
    }

}