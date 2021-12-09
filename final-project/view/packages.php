<?php
// $username="";
// session_start();
// if (session_status() === PHP_SESSION_NONE) {
// $username=$_SESSION['username'];
// if($username!="")
//     include '../components/loggedHeader.php';
// }
// else
//     include '../components/header.php';
?>

<?php
//dbms
$servername="localhost";
$dbUser="root";
$dbPassword="";
$dbname="isp";
$connection = new mysqli($servername, $dbUser, $dbPassword, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
    ?>




<html>
    <head>
        <title>Packages</title>
        <link rel="stylesheet" href="../content/package.css">
    </head>
    <body>
        <div class="packages">
            <div class="header">
                <a class="one">Header</a>
            </div>
        <div class="details">
            <div class="speed">
                5
            </div>
            <div class="others">
                <div>
                    Mbps
                </div>
                <div>
                    DEDICATED
                </div>
                <div>
                    UNLIMITED DOWNLOAD
                </div>
            </div>
        </div>
        <div class="costs">
            <div class="cost">
                2499
            </div>
            <div class="taka">
                TK/mo
            </div>
        </div>
    </body>
</html>
        <table>
        <?php
        /*
        $sql = "SELECT * FROM package";
	    $stmt = $connection->prepare($sql);
	    $response = $stmt->execute();

	if ($response) {
		$data = $stmt->get_result();
        $flag=false;
		if ($data->num_rows > 0) {
			while ($row = $data->fetch_assoc()) {
                $a=$row['package'];
                $b=$row['speed'];
                $c=$row['cost'];
                echo "
                    <tr>
                        <td>$a</td>
                        <td>$b</td>
                        <td>$c</td>
                    </tr>
                    ";
        }
    }
}
*/
    ?>
</table>
    

