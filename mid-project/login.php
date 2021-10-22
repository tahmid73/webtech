<head>
    <meta charset="UTF-8">
    <title>INTERNET SERVICE PROVIDER</title>
</head>
<?php
    $handle1=fopen("data.json","r");
    $data= fread($handle1,filesize("data.json"));
    $explode=explode("\n",$data);
    $arr1=array();
    for ($i = 0; $i < count($explode)-1; $i++)
    {
        $json=json_decode(($explode[$i]));
        array_push($arr1, $json);
    }
    $username=$password=$usernameErr=$passErr=$flag="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["username"]))
            $usernameErr="Enter your name";
        else
            $username=input($_POST["username"]);
        if(empty($_POST["password"]))
            $passErr="Enter your password";
        else
            $password=$_POST["password"];
        for($i=0;$i<count($arr1);$i++){
                $a=$arr1[$i]->username;
                $b=$arr1[$i]->password;
                if($a==$username && $b==$password){
                    header("LOCATION:home.php");
                    $flag=1;
                }
            }
        if($flag!=1)
            $passErr=$usernameErr="Incorrect information";
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

<?php
