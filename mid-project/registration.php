<?php
$request_method=$_SERVER['REQUEST_METHOD'];
$usernameErr=$firstnameErr=$lastnameErr=$addressErr=$passwordErr=$phoneErr="";
$username=$firstname=$lastname=$address=$password=$phone="";
if($request_method==="POST"){
    $username=$_POST['username'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    if(empty($firstname)){
        $firstnameErr="Enter your First name";
    }
    else if(empty($username)){
        $usernameErr="Enter your username";
    }
    else if(empty($lastname)){
        $lastnameErr= "Enter Last name<br>";
    }
    else if(empty($address)){
        $addressErr= "Enter your address<br>";
    }
    else if(empty($password)){
        $passwordErr= "Enter Your password <br>";
    }
    else if(empty($phone)){
        $phoneErr= "Enter your phone no<br>";
    }
    else{
        $handle=fopen("data.json","a");
        $arr=array('username' =>$username,'firstname'=>$firstname,'lastname' =>$lastname,'address'=>$address,'password'=>$password,'phone'=>$phone);
        $encode=json_encode($arr);
        $res=fwrite($handle, $encode."\n");
        header('Location:login.php');
    }

}
?>

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>
    <fieldset>
    <legend>
        <h1>Sign up!</h1>
    </legend>
    <div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label>Username :</label>
        <input type="text" name="username">
        <span>
                *<?php echo ".$usernameErr" ?>
            </span><br><br>
        <label>First Name :</label>
        <input type="text" name="firstname">
        <span>
                *<?php echo $firstnameErr ?>
            </span><br><br>
        <label>Last Name:</label>
        <input type="text" name="lastname">
        <span>
                *<?php echo $lastnameErr ?>
            </span><br><br>
        <label>Address :</label>
        <input type="textarea" name="address">
        <span>
                *<?php echo $addressErr ?>
            </span><br><br>
        <label>Password :</label>
        <input type="password" name="password">
        <span>
                *<?php echo $passwordErr ?>
            </span><br><br>
        <label>Telephone no :</label>
        <input type="tel" name="phone">
        <span>
                *<?php echo $phoneErr ?>
            </span><br><br>
        <input type="submit" name="submit" value="Sign up!">
        </form>
    </div>
    </fieldset>
</body>
</html>

<?php

