<?php

include('inc/config.php');

if(isset($_POST['submit'])){
    $name=   $_POST['name'];
    $phone_no= $_POST['phone_no'];
    $class= $_POST['class'];
    $role= $_POST['role'];
    $address=$_POST['address'];
    $age=   $_POST['age'];
    $email=  $_POST['email'];
    $sql = "INSERT INTO users (name,phone_no,class,role,address,age,email) VALUES('$name','$phone_no','$class','$role','$address','$age','$email')";
  
    $result = mysqli_query($con,$sql);
    if($result){
        echo "Data is inserted into database";
        // header('location:all-students.php');
    }else{
        die(mysqli_error($con));
    }
}

?>
