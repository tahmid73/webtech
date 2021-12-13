<?php
include './components/loggedHeader.php';
$username="Username";
$password="Password";
$lineType="Line Type";
$speed="Speed";
$cost="Cost";
$usernameErr=$passErr=$flag="";
include '../model/database.php';
?>

<head>
    <meta charset="UTF-8">
    <title>Order</title>
    <link rel="stylesheet" href="./css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
    <div class="middle">
    <form action="../controller/loginB.php" method="post" onsubmit="">
    <?php
    include 'middle.php';
    ?>
    </div>
    <div id="loginForm" class="loginForm">
        <span class="fields">
            <h2 class="heading">Order</h2>
        </span>
            <select class="username" placeholder="<?php echo $speed ?>" type="speed" name="speed" >
                <?php 
                    $sql = "SELECT * FROM package";
	                $stmt = $connection->prepare($sql);
	                $response = $stmt->execute();
	                if ($response) {
	                	$data = $stmt->get_result();
                        $flag=false;
	                	if ($data->num_rows > 0) {
	                		while ($row = $data->fetch_assoc()) {
                                $a=$row['speed'];
                                echo $a;
                                ?>
                                <option value="<?php echo $a ?>"><?php echo $a ?></option>
                           <?php }
                        }
                    }
                ?>
            </select>
            <select class="username" placeholder="<?php echo $lineType ?>" type="lineType" name="lineType">
                <option value="opticalFibar">Optical Fibar</option>
                <option value="cat5">Cat5</option>
                <option value="cat6">cat6</option>
            </select>
            <select class="username" name="" id="">
            <?php 
                    $sql1 = "SELECT * FROM package where speed='$a'";
	                $stmt1 = $connection->prepare($sql1);
	                $response1 = $stmt1->execute();
	                if ($response1) {
	                	$data1 = $stmt1->get_result();
                        $flag=false;
	                	if ($data1->num_rows > 0) {
	                		while ($row = $data1->fetch_assoc()) {
                                $a=$row['cost'];
                                echo "
                                <option value=".$a.">$a</option>
                                    ";
                            }
                        }
                    }
                ?>
                </select>
            <input type="submit" value="Order" class="loginBtn">
            </div>
    </form>
</body>
</html>

