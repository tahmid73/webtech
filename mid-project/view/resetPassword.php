<?php 
include '../components/header.php';

$username=$phone=$usernameErr=$phoneErr="";
?>

<html>
<head>
    <title>Document</title>
</head>
<body>
<form action="../controller/resetPasswordB.php" method="post">
    <br>
    <label>Username:</label>
    <input type="text" name="username" value="<?php echo $username ?>" placeholder="<?php echo $username ?>">
    <br><br>
    <label>Phone NO:</label>
    <input type="tel" name="phone" value="<?php echo $phone ?>" placeholder="<?php echo $phone ?>">
    <br><br>
    <input type="submit">
    
</form>

</body>
</html>


