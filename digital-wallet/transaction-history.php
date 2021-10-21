<?php
$handle1=fopen("history.json","r");
$data= fread($handle1,filesize("history.json"));
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
    <title>History</title>
</head>
<body>
<h1>Page 3 [Transaction History]</h1>
    <h3>Digital Wallet</h3>
    <a href="home.php">1.Home</a>
    <a href="add-beneficiary.php">2.Add Beneficiary</a>
    <a href="transaction-history.php">3.Transaction History</a>
    <br><br>
    <h3>Transaction History:</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label>From:</label>
        <input type="datetime-local" name="from">
        <label>To:</label>
        <input type="datetime-local" name="to">
        <input type="submit" placeholder="Search">
    </form>
    <h4>Total Record:</h4>
    
<?php
    echo "<table>
<tr>
    <th>Transaction Category</th>
    <th>To</th>
    <th>Amount</th>
    <th>Transferred On</th>
</tr>
";
for($i=0;$i<count($arr1);$i++){
    $a=$arr1[$i]->category;
    $b=$arr1[$i]->to;
    $c=$arr1[$i]->amount;
    $d=$arr1[$i]->time;
    echo "
    <tr>
        <td>$a</td>
        <td>$b</td>
        <td>$c</td>
        <td>$d</td>
    </tr>
    ";
}
echo "</table>";
?>
</body>
</html>

<style>
    table, th, td {
  border: 1px solid black;
}
</style>
<?php 
