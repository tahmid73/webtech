<?php
include '../model/database.php';
$userId=$_POST['id'];
$sql="DELETE FROM users WHERE id ={$userId}";
$stmt = $connection->prepare($sql);
$response = $stmt->execute();
        if ($response){
            echo "deleted";
            header("Location:../view/showUsers.php");
        }
        else{ 
            echo "An error occured. Try again";
            header("Location:home.php");
        }

?>
<script>
    console.log(<?php echo $userId?>);
</script>