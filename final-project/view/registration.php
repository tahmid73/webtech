<?php
include '../components/header.php';
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
    <link rel="stylesheet" href="../content/login.css">
</head>
<body>
        <form action="../controller/registrationB.php" method="post">
    <div class="middle">
        <?php
    include '../components/middle.php';
    ?>
    </div>
    <div class="regForm">
        <span class="fields">
            <h2 class="heading">Sign up!</h2>
        </span>
        <span class="fields">
        <input class="username" placeholder="<?php echo $username ?>" type="text" name="username">
        </span>
        <span class="fields">
        <input class="username" placeholder="<?php echo $firstname ?>" type="text" name="firstname">
        </span>
        <span class="fields">
        <input class="username" placeholder="<?php echo $lastname ?>" type="text" name="lastname">
        </span>
        <span class="fields">
        <input class="username" placeholder="<?php echo $address ?>" type="textarea" name="address">
        </span>
        <span class="fields">
        <input class="username" placeholder="<?php echo $phone ?>" type="tel" name="phone">    
        </span>
        <span class="fields">
        <input class="username" placeholder="<?php echo $password ?>" type="password" name="password">
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


