<?php
include './components/loggedHeader.php';
$username="User Name";
$password="Password";
$lastname="Last Name";
$firstname="First Name";
$address="Address";
$phone="Phone";
?>

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <script src="./js/app.js"></script>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
        <form name="regForm" action="../controller/registrationB.php" method="post" onsubmit="return isValidReg(this);">
    <div class="middle">
        <?php
    include './components/middle.php';
    ?>
    </div>
    <div class="regForm">
        <span class="fields">
            <h2 class="heading">Sign up!</h2>
        </span>
        <span class="fields">
        <input id="f1" class="username" value="<?php echo $username ?>" placeholder="<?php echo $username ?>" type="text" name="username">
        <a id="usernameErr"></a>
        </span>
        <span class="fields">
        <input id="f2" class="username" value="<?php echo $firstname ?>" placeholder="<?php echo $firstname ?>" type="text" name="firstname">
        <a id="firstnameErr"></a>
        </span>
        <span class="fields">
        <input id="f3" class="username" value="<?php echo $lastname ?>" placeholder="<?php echo $lastname ?>" type="text" name="lastname">
        <a id="lastnameErr"></a>        
        </span>
        <span class="fields">
        <input id="f4" class="username" value="<?php echo $address ?>" placeholder="<?php echo $address ?>" type="textarea" name="address">
        <a id="addressErr"></a>
        </span>
        <span class="fields">
        <input id="f5" class="username" value="<?php echo $phone ?>" placeholder="<?php echo $phone ?>" type="tel" name="phone">    
        <a id="phoneErr"></a>
        </span>
        <span class="fields">
        <input id="f6" class="username" value="<?php echo $password ?>" placeholder="<?php echo $password ?>" type="password" name="password">
        <a id="passwordErr"></a>
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


