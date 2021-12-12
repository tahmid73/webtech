<?php
    include '../view/components/loggedHeader.php';
    ?>
    <div class="middle">
    <?php
    include '../view/components/middle.php';
    $package="Package";
    $cost="Cost";
    $speed="Speed";
?>
    </div>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add package</title>
    <script src="./js/app.js"></script>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <form action="../controller/addPackageB.php" class="loginForm" method="post" onsubmit="isValidPack(this);">
    <div class="fields">
            <input type="text" name="package" value="<?php echo $package ?>" class="username">
            <br><br>
            <input type="text" name="cost" value="<?php echo $cost ?>" class="username">
            <br><br>
            <input type="text" name="speed" value="<?php echo $speed ?>" class="username">
            <br><br>
            <input type="submit" value="Add" class="loginBtn">
    </form>
    </div>
</body>
</html>
<?php
//require '../view/packages.php';