<?php
    $flag=$amountErr=$category=$amount=$to=$time="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["amount"])||$_POST["amount"]==0)
            $amountErr="Enter amount more then 0";
        else{
        $amountErr="";
        $category=$_POST['category'];
        $amount=$_POST['amount'];
        $to=$_POST['to'];
        $time=date("m-d-Y h:i");
        $flag=1;
        }
    }
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
    <title>Home</title>
</head>
<body>
    <h1>Page 1 [Home]</h1>
    <h3>Digital Wallet</h3>
    <a href="home.php">1.Home</a>
    <a href="add-beneficiary.php">2.Add Beneficiary</a>
    <a href="transaction-history.php">3.Transaction History</a>
    <br><br>
    <h3>Fund Transfer:</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label>Select Category:</label>
    <select name="category">

        <option>send_money</option>
        <option>mobile_recharge</option>
    </select>    
    <br><br>
    <label>To:</label>
    <select name="to" placeholder="<?php echo $to ?>">
        <?php
            for($i=0;$i<count($arr1);$i++){
                $a=$arr1[$i]->name;
                $b=$arr1[$i]->phone;
                echo "<option value=".$b." >$a</option>";
            }
         ?>
    </select>
    <br><br>
    <label>Amount:</label>
    <input type="text" name="amount" placeholder="<?php echo $amount ?>">
    <span>
            <?php echo $amountErr ?>
    </span>
    <br><br>
    <input type="submit"">
    <br><br>
    </form>
</body>
</html>

<?php
if($flag==1){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $handle=fopen("history.json","a");
    $arr=array('category'=>$category,'to'=>$to,'amount'=>$amount,'time'=>$time);
    $encode=json_encode($arr);
    $res=fwrite($handle, $encode."\n");
}
}