<?php
    $handle=fopen("data.json","r");
    $data= fread($handle,filesize("data.json"));
    $explode=explode("\n",$data);
    ?>
    <form action="main.php">
<fieldset>
                <legend>Login:</legend>
                <label >Username: </label>
                <input type="text" name="username">
                <br>
                <label>Password: </label>
                <input type="password" name="pass" >
                <br>
</fieldset>
                <input type="submit" name="submit">
</form>

    <?php

    if($_SERVER['REQUEST_METHOD'] === "POST" and count($_REQUEST)>0){
			$flag=false;
			for($i = 0;$i< count($arr); $i++)
			{
				if(($_POST['username'] === $arr[$i]-> username) and ($_POST['pass'] === $arr[$i]-> password) )
					$flag=true;
                echo "$arr[$i]->username";
			}

			if ($flag)
				header("Location:hello.php");
			else 
				echo "try again";

	}