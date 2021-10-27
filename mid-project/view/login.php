<?php
include '../components/header.php';
$username=$password=$usernameErr=$passErr=$flag="";
?>

<head>
    <meta charset="UTF-8">
    <title>INTERNET SERVICE PROVIDER</title>
</head>
<body>
    <form action="../controller/loginB.php" method="post">
        <fieldset>
            <legend>Login</legend>
            <fieldset>
            <legend>Username</legend>
            <input type="text" name="username" placeholder="<?php echo $username ?>" value="<?php echo $username ?>">
            </fieldset>
            <fieldset>
            <legend>Password</legend>
            <input type="password" name="password" placeholder="<?php echo $password ?>" value="<?php echo $password ?>">
            </fieldset>
            <br>
            <input type="submit">
            <br><br>
            <a>Forgot Password?</a>
            <a href="resetPassword.php">Reset</a>
            <br><br>
            <a>Don't have an account yet?</a>
            <a href="registration.php">Sign Up</a>
        </fieldset>
    </form>
    
</body>
</html>

