<?php
include './components/loggedHeader.php';
$username="User Name";
$password="Password";
$lastname="Last Name";
$firstname="First Name";
$address="Address";
$phone="Phone";
$type="Type";
?>

<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link rel="stylesheet" href="../view/css/login.css">
    <script src="./js/app.js"></script>
</head>
<body>
        <form action="../controller/registrationBAdmin.php" method="post" onsubmit="return isValidReg(this);">
        <div class="middle">
            <?php include 'middle.php';?>
        </div>
    <div class="regForm">
        <span class="fields">
            <h2 class="heading">Add User</h2>
        </span>
        <span class="fields">
        <input class="username" value="<?php echo $username ?>" placeholder="<?php echo $username ?>" type="text" name="username">
        <a id="usernameErr"></a>
        </span>
        <span class="fields">
        <input class="username" value="<?php echo $firstname ?>" placeholder="<?php echo $firstname ?>" type="text" name="firstname">
        <a id="firstnameErr"></a>
        </span>
        <span class="fields">
        <input class="username" value="<?php echo $lastname ?>" placeholder="<?php echo $lastname ?>" type="text" name="lastname">
        <a id="lastnameErr"></a>        
        </span>
        <span class="fields">
        <input class="username" value="<?php echo $address ?>" placeholder="<?php echo $address ?>" type="textarea" name="address">
        <a id="addressErr"></a>
        </span>
        <span class="fields">
        <input class="username" value="<?php echo $phone ?>" placeholder="<?php echo $phone ?>" type="tel" name="phone">    
        <a id="phoneErr"></a>
        </span>
        <span class="fields">
        <input class="username" value="<?php echo $password ?>" placeholder="<?php echo $password ?>" type="password" name="password">
        <a id="passwordErr"></a>
        </span>
        <span class="fields">
        <select class="username" placeholder="<?php echo $type ?>" type="type" name="type">
            <option value="admin">Admin</option>
            <option value="customer">Customer</option>
            <option value="operator">Customer Operator</option>

        </select>
        </span>
        <input class="loginBtn" type="submit" name="submit" value="Sign up!">
    </div>
    </form>
    <div class="packageMid">
    <?php
        include '../view/packages.php';
    ?>
    </div>
</body>
</html>


