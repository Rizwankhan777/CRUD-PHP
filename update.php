<?php

include('connect.php');

$_id = $_GET['update_id'];
$sql = "select * from `crud` where id=$_id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql = "update `crud` set id =$_id, name='$name',email='$email',mobile='$mobile',password='$password' where id=$_id";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "data is updated";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center my-5">UPADTE DATA</h1>
                    <form method="POST" class="my-5">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" value="<?php echo $name ?>" aria-describedby="emailHelp" name="name" placeholder="Enter name">
                          
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $email ?>" placeholder="enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mobile</label>
                            <input type="text" class="form-control" name="mobile" value="<?php echo $mobile ?>" placeholder="enter mobile number">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" class="form-control" name="password" value="<?php echo $password ?>"  placeholder="enter password">
                        </div>
                       
                        <button name="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>