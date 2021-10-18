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
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>First Name</label>
        <input type="text" name="firstName"><br>
        <label>Last Name</label>
        <input type="text" name="lastName"><br>
        <label>Address</label>
        <input type="textarea" name="address"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <label>Telephone no</label>
        <input type="tel" name="phone"><br><br>
        <input type="submit" name="submit" value="Sign up!">
        </form>
    </div>
    </fieldset>
</body>
</html>