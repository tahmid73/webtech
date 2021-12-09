<?php 
include '../components/loggedHeader.php';
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
            <form>
                <fieldset>
                    <legend>
                        <h1>Hello, <?php echo $row['username'] ?></h1>
                    </legend>
                    <fieldset>
                        <legend>
                            First Name:
                        </legend>
                        <input type="text" value="<?php echo $row['firstname'] ?>" readonly>
                    </fieldset>
                    <fieldset>
                        <legend>
                            Last Name:
                        </legend>
                        <input type="text" value="<?php echo $row['lastname'] ?>" readonly>
                    </fieldset>
                    <fieldset>
                        <legend>
                            Address:
                        </legend>
                        <input type="text" value="<?php echo $row['address'] ?>" readonly>
                    </fieldset>
                    <fieldset>
                        <legend>
                            Phone No:
                        </legend>
                        <input type="text" value="<?php echo $row['phone'] ?>" readonly>
                    </fieldset>
                    <input type="button" onclick="document.location.href='../view/profileEdit.php'" value="Edit">
                </fieldset>
            </form>
<?php   }
    

        }
    }

}