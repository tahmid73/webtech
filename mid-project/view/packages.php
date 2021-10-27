<?php
session_start();
$username=$_SESSION['username'];
if($username=="")
include '../components/header.php';
else
include '../components/loggedHeader.php';
echo "<br>";


//file read
$handle1=fopen("../model/package.json","r");
$data= fread($handle1,filesize("../model/package.json"));
$explode=explode("\n",$data);
$arr1=array();
    for ($i = 0; $i < count($explode)-1; $i++)
    {
        $json=json_decode(($explode[$i]));
        array_push($arr1, $json);
    }
    ?>
    <style>
    table, th, td,tr {
  border: 2px solid black;
}
</style>
        <table>
            <tr>
                <th>Package</th>
                <th>Cost</th>
                <th>Speed</th>
            </tr>
        <?php
    for($i=0;$i<count($arr1);$i++){ 
        $a=$arr1[$i]->package;
        $b=$arr1[$i]->cost;
        $c=$arr1[$i]->speed;
        echo "
        <tr>
            <td>$a</td>
            <td>$b</td>
            <td>$c</td>
        </tr>
        ";
    }
    ?>
</table>
    

