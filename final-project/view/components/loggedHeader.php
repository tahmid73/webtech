<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../view/css/header.css">
</head>
<body>
<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(count($_SESSION)>0){
?>
    <div class="head">
    <div>
        <a class="logo">ISP</a>
    </div>
    <div class="menu">
        <a class="menus" href="../controller/profile.php">Profile</a>
        <a class="menus" href="../view/aboutUs.php">About us</a>
        <?php
        if($_SESSION['type']!='admin'){?>
            <a class="menus" href="../view/order.php">Order</a>
        <?php
        }
        else if($_SESSION['type']==='admin'){?>
            <a class="menus" href="../view/addPackage.php">Add Package</a>
        <?php
        }
        ?>
    </div> 
    <div>
        <a class="login" href="../controller/logout.php">Logout</a>
    </div>
    </div>
    <?php
}
    else{
        ?>
        <div class="head">
    <div>
        <a class="logo">ISP</a>
    </div>
    <div class="menu">
        <a class="menus" href="../view/registration.php">Registration</a>
        <a class="menus" href="../view/aboutUs.php">About-us</a>
        <a class="menus" href="../view/order.php">Order</a>
    </div> 
    <div>
        <a class="login" href="../view/login.php">login</a>
    </div>
    </div>
        <?php
    }
?>
</body>
</html>