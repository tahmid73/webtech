<?php
$username=$phone=$usernameErr=$phoneErr="";
$handle1=fopen("../model/data.json","r");
$data= fread($handle1,filesize("../model/data.json"));
$explode=explode("\n",$data);
$arr1=array();
for ($i = 0; $i < count($explode)-1; $i++)
{
    $json=json_decode(($explode[$i]));
    array_push($arr1, $json);
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=input($_POST['username']);
    $phone=$_POST['phone'];

    if($username=="")
        $usernameErr="Enter your username";
    if($phone=="")
        $phoneErr="Enter your phone no";
    for($i=0;$i<count($arr1);$i++){
            $a=$arr1[$i]->username;
            
                    if($arr1[$i]->phone==$phone && $arr1[$i]->username==$username){
                        echo "<br><br>Your Username is:$username";
                        echo "<br>Your Password is:";
                        echo $arr1[$i]->password;?>
                        <br><br>
                        <a>Login to Continue</a>
                        <a href="../view/login.php">Login</a>
    <?php           }
                    else{
                        $usernameErr="wrong information";
                        $phoneErr="wrong information";
                    }
                
        }
        
    }

function input($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
