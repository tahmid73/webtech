<?php
//dbms
include '../model/database.php'
?>




<html>
    <head>
        <title>Packages</title>
        <link rel="stylesheet" href="../view/css/package.css">
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
    

