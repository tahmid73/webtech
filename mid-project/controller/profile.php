<?php 
include '../components/loggedHeader.php';
echo "<br>";
session_start();
$username=$_SESSION['username'];

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

    for($i=0;$i<count($arr1);$i++){
        $a=$arr1[$i]->username;
        if($a==$username){?>
            <form>
                <fieldset>
                    <legend>
                        <h1>Hello, <?php echo $arr1[$i]->username ?></h1>
                    </legend>
                    <fieldset>
                        <legend>
                            First Name:
                        </legend>
                        <input type="text" value="<?php echo $arr1[$i]->firstname ?>" readonly>
                    </fieldset>
                    <fieldset>
                        <legend>
                            Last Name:
                        </legend>
                        <input type="text" value="<?php echo $arr1[$i]->lastname ?>" readonly>
                    </fieldset>
                    <fieldset>
                        <legend>
                            Address:
                        </legend>
                        <input type="text" value="<?php echo $arr1[$i]->address ?>" readonly>
                    </fieldset>
                    <fieldset>
                        <legend>
                            Phone No:
                        </legend>
                        <input type="text" value="<?php echo $arr1[$i]->phone ?>" readonly>
                    </fieldset>
                </fieldset>
            </form>
<?php   }
    
}