<?php
include '../components/header.php';
$username="Username";
$password="Password";
$usernameErr=$passErr=$flag="";
?>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../content/login.css">
</head>
<body>
    <div class="middle">
    <form action="../controller/loginB.php" method="post">
    <?php
    include '../components/middle.php';
    ?>
    </div>
    <div id="loginForm" class="loginForm">
        <span class="fields">
            <h2 class="heading">Login!</h2>
        </span>
            <input class="username" type="text" name="username" placeholder="<?php echo $username ?>" value="<?php echo $username ?>">
        
            <input class="password" type="password" name="password" placeholder="<?php echo $password ?>" value="<?php echo $password ?>">
            <input type="submit" value="Login" class="loginBtn">
            <div class="reset">
            <a class="labels">Forgot Password?</a>
            <a class="link" href="resetPassword.php">Reset</a>
            </div>
            <div class="signup">
            <a class="labels">Don't have an account yet?</a>
            <a class="link" href="registration.php">Sign Up</a>
            </div>
            </div>
    </form>
    <div class="packageMid">
    <?php
        include '../view/packages.php';
    ?>
    </div>
</body>
</html>

