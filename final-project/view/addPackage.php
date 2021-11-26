
<html>
<head>
    <meta charset="UTF-8">
    <title>Add package</title>
</head>
<body>
    <form action="../controller/addPackageB.php" method="post">
        <fieldset>
            <legend>
                Add Package
            </legend>
            <label>Package</label>
            <input type="text" name="package">
            <br><br>
            <label>Cost</label>
            <input type="text" name="cost">
            <br><br>
            <label>Speed</label>
            <input type="text" name="speed">
            <br><br>
            <input type="submit" value="Add">
        </fieldset>
    </form>
</body>
</html>
<?php
//require '../view/packages.php';