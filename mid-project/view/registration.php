<?php
include '../components/header.php';
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
        <form action="../controller/registrationB.php" method="post">
        <label>Username :</label>
        <input type="text" name="username">
        <br><br>
        <label>First Name :</label>
        <input type="text" name="firstname">
        <br><br>
        <label>Last Name:</label>
        <input type="text" name="lastname">
        <br><br>
        <label>Address :</label>
        <input type="textarea" name="address">
        <br><br>
        <label>Password :</label>
        <input type="password" name="password">
        <br><br>
        <label>Telephone no :</label>
        <input type="tel" name="phone">
        <br><br>
        <input type="submit" name="submit" value="Sign up!">
        </form>
    </div>
    </fieldset>
</body>
</html>


