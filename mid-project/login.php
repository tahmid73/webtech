<head>
    <meta charset="UTF-8">
    <title>INTERNET SERVICE PROVIDER</title>
</head>
<?php
    $username=$password=$usernameErr=$passErr="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["username"]))
            $usernameErr="Enter your name";
        else
            $username=input($_POST["username"]);
        if(empty($_POST["password"]))
            $passErr="Enter your password";
        else
            $password=$_POST["password"];
        if($username==="tahmid" && $password==="123")
        header("Location: home.php");
        else if($username!="tahmid")
            $usernameErr="Wrong username";
        else if($password!="123")
            $passErr="wrong password";
        else
            Echo "wrong information";
    }
    function input($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
?>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <fieldset>
            <legend>Login</legend>
            <fieldset>
            <legend>Username</legend>
            <input type="text" name="username">
            <span>
                *<?php echo $usernameErr ?>
            </span>
            </fieldset>
            <fieldset>
            <legend>Password</legend>
            <input type="password" name="password">
            <span>
                *<?php echo $passErr ?>
            </span>
            </fieldset>
            <br>
            <input type="submit"><br>
        </fieldset>
    </form>
</body>
</html>

<?php
