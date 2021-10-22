<?php
$username=$usernameErr="";
$handle1=fopen("data.json","r");
$data= fread($handle1,filesize("data.json"));
$explode=explode("\n",$data);
$arr1=array();
for ($i = 0; $i < count($explode)-1; $i++)
{
    $json=json_decode(($explode[$i]));
    array_push($arr1, $json);
}
?>

<html>
<head>
    <title>Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label>Username</label>
    <input type="text" name="username">
    <input type="submit">
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
        for($i=0;$i<count($arr1);$i++){
            $a=$arr1[$i]->username;
            if($a==$_POST['username']){?>
                <br><br>
                <label>Phone no:</label>
                <input type="text">
                <input type="submit">
    <?php        }
        }
    ?>
</form>

</body>
</html>

<?php
function resetPassword(){
    echo "hello";
}