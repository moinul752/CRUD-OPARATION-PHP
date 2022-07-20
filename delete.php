<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql ="DELETE FROM crud WHERE id=$id";
    $result =mysqli_query($connection,$sql);
    if($result){
        echo "<h1>Deleted Successfully!!</h1>";
        header("location:display.php");
    }else{
        die(mysqli_error($connection));

    }
}
?>