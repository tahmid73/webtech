<?php 
include '../view/components/loggedHeader.php';
include '../model/data.php';
echo "<br>";
if(!isset($_SESSION)) 
{ 
    session_start();
} 
else{
    if($_SESSION['type']!="admin"){?>
        <script>alert("not allowed")</script>
        <?php
        header("Location:../controller/home.php");
}
}
?>
    <body>
        <p id="i3"></p>
    </body>
        