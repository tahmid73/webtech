<?php
    $flag="";
    //file read
    $handle1=fopen("../model/data.json","r");
    $data= fread($handle1,filesize("../model/data.json"));
    $explode=explode("\n",$data);
    $arr1=array();
    for ($i = 0; $i < count($explode)-1; $i++)
    {
        $json=json_decode(($explode[$i]));
        array_push($arr1, $json);
    }

    //
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $password=$_POST["password"];
        $username=input($_POST["username"]);
        if($username=="")
            echo "Enter your name";  
        if(empty($_POST["password"]))
            echo "Enter your password";     
        if($username!="" && $password!=""){
        for($i=0;$i<count($arr1);$i++){
                $a=$arr1[$i]->username;
                $b=$arr1[$i]->password;
                $type=$arr1[$i]->type;
                if($a==$username && $b==$password){
                    session_start();
                    $_SESSION['username']=$username;
                    $_SESSION['type']=$type;
                    header("LOCATION:home.php");
                    $flag=1;
                }
            }
        }
        if($flag!=1)
            $passErr=$usernameErr="Incorrect information";
    }
    function input($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
?>