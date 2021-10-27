<?php 
include '../components/loggedHeader.php';
session_start(); 
echo "welcome to home ";
echo $_SESSION['username'];
    
    $handle1=fopen("../model/data.json","r");
    $data= fread($handle1,filesize("../model/data.json"));
    $explode=explode("\n",$data);
    $arr1=array();
    for ($i = 0; $i < count($explode)-1; $i++)
    {
        $json=json_decode(($explode[$i]));
        array_push($arr1, $json);
    }
    echo "<br><br>Total Users:";
    echo count($arr1);

    //package
    $handle=fopen("../model/package.json","r");
    $data= fread($handle,filesize("../model/package.json"));
    $explode=explode("\n",$data);
    $arr=array();
    for ($i = 0; $i < count($explode)-1; $i++)
    {
        $json=json_decode(($explode[$i]));
        array_push($arr, $json);
    }
    echo "<br><br>Available Packages:";
    echo count($arr);

    

if($_SESSION['type']=="admin")
    include "../components/footer.php"
?>
