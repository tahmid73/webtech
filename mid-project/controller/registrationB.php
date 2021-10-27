<?php

$request_method=$_SERVER['REQUEST_METHOD'];
if($request_method==="POST"){
    $username=$_POST['username'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    if(empty($firstname)){
        echo "Enter your First name";
    }
    else if(empty($username)){
        echo "Enter your username";
    }
    else if(empty($lastname)){
        echo "Enter Last name<br>";
    }
    else if(empty($address)){
        echo "Enter your address<br>";
    }
    else if(empty($password)){
        echo "Enter Your password <br>";
    }
    else if(empty($phone)){
        echo "Enter your phone no<br>";
    }
    else{
        $handle=fopen("../model/data.json","a");
        $arr=array('username' =>$username,'firstname'=>$firstname,'lastname' =>$lastname,'address'=>$address,'password'=>$password,'phone'=>$phone, 'type'=>"customer");
        $encode=json_encode($arr);
        $res=fwrite($handle, $encode."\n");
        header('Location:../view/login.php');
    }

}