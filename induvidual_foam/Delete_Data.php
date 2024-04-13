<?php 

include 'connection.php';

if(isset($_GET['ankitDeleteid']))
{
    $id=$_GET['ankitdaleteid'];

    $sql= "delete from individuale_registration where id=$id";

    $result=mysqli_query($con,$sql);

    if($result)
    {
        header('location:Display_Data.php');
        echo "Deleted Successfull.....";
    }
}



?>