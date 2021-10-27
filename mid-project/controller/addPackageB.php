<?php

$request_method=$_SERVER['REQUEST_METHOD'];
if($request_method==="POST"){
    $package=$_POST['package'];
    $speed=$_POST['speed'];
    $cost=$_POST['cost'];

    if(empty($package)){
        $firstnameErr="Enter your First name";
    }
    else if(empty($speed)){
        $usernameErr="Enter your username";
    }
    else if(empty($cost)){
        $lastnameErr= "Enter Last name<br>";
    }

    else{
        $handle=fopen("../model/package.json","a");
        $arr=array('package' =>$package,'speed'=>$speed,'cost' =>$cost);
        $encode=json_encode($arr);
        $res=fwrite($handle, $encode."\n");
        header("LOCATION:../view/addPackage.php");
    }

}