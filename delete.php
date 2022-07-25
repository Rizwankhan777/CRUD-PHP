<?php

include('connect.php');

if(isset($_GET['delete_id'])){
$_id = $_GET['delete_id'];

$sql = "delete from `crud` where id=$_id";
$result = mysqli_query($con,$sql);
if($result){
    // echo("Data is deleted");
    header(('location:display.php'));
}else{
    die(mysqli_error($con));
}   
}


?>