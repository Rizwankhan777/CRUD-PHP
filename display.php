<?php
include ('connect.php')

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

<style>
    a.link{
        padding: 10px 20px;
        background-color: #000;
        color: #fff;
        border-radius: 4px;
      
    }
</style>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 my-5">
                    <h1 class="text-center my-5">USERS</h1>
                    <a href="index.php" class="link">ADD USERS</a>
                <table class="table my-5" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Passowrd</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
<?php

$sql = "select * from `crud`";
$result = mysqli_query($con,$sql);
if($result){
   while($row = mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];
    echo '
    <tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$mobile.'</td>
    <td>'.$password.'</td>
    <td>
    <a href="update.php?update_id='.$id.'" ><button class="btn btn-primary">Update</button></a>
    <a href="delete.php?delete_id='.$id.'" ><button class="btn btn-danger">Delete</button></a>    
    </td>
  </tr>
  <tr>
    ';

    }
   
}

?>

  </tbody>
</table>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>