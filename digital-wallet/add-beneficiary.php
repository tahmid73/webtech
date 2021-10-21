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
?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Page 2 [Add Beneficiary]</h1>
    <b>Digital Wallet</b><br>
    <a href="home.php">1.Home</a>
    <a href="add-beneficiary.php">2.Add Beneficiary</a>
    <a href="transaction-history.php">3.Transaction History</a>
    <br>
    <b>Add Beneficiary:</b>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label>Beneficiary Name:</label>
        <input type="text" name="name">
        <label>Mobile No:</label>
        <input type="tel" name="phone">
        <input type="submit">
    </form>
</body>
</html>
<style>
    table, th, td {
  border: 1px solid black;
}
</style>
<?php
$name=$phone="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $handle=fopen("data.json","a");
    $arr=array('name'=>$name,'phone'=>$phone);
    $encode=json_encode($arr);
    $res=fwrite($handle, $encode."\n");
}
echo "<table>
<tr>
    <th>Name</th>
    <th>Phone</th>
</tr>
";
for($i=0;$i<count($arr1);$i++){
    $a=$arr1[$i]->name;
    $b=$arr1[$i]->phone;
    echo "
    <tr>
        <td>$a</td>
        <td>$b</td>
    </tr>
    ";
}
echo "</table>";
