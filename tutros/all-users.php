

<?php
include ('inc/config.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
  <title>Care Giver | Dashboard</title>
  <?php include('./inc/styles.php') ?>
</head>
<style>
  .map.bg-gradient-primary{
    display: none;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Navbar -->
  <?php include('./inc/nav.php') ?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <?php include('./inc/sidebar.php') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mx-auto">
            <h1 class="m-0">Users List </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="col-md-10 mx-auto">
           <div class="text-right">
            <a href="add-users.php" class="btn btn-dark">Add User</a>
           </div>
            <table id="CareListTable" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Phone No.</th>
                      <th>Class</th>
                      <th>Role</th>
                      <th>Address</th>
                      <th>Age</th>
                      <th>Email</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>

              <?php
           $sql = "select * from users";
           $result = mysqli_query($con,$sql);
           if($result){
            while($row = mysqli_fetch_assoc($result)){
             $user="";
             $id=$row['id'];
             $name=$row['name'];
             $phone_no=$row['phone_no'];
             $class=$row['class'];
             $role=$row['role'];
             $address=$row['address'];
             $age=$row['age'];
             $email=$row['email'];

             if ($role == 1) {
              $user = "Student";
            } else {
                $user = "Teacher";
            };

             echo '
             <tr>
             <th scope="row">'.$id.'</th>
             <td>'.$name.'</td>
             <td>'.$phone_no.'</td>
             <td>'.$class.'</td>
             <td class="badge badge-primary">
            '.$user.'
           </td>
             
             <td>'.$address.'</td>
             <td>'.$age.'</td>
             <td>'.$email.'</td>
             <td>
             <a href="update.php?update_id='.$id.'" ><button class="btn btn-sm btn-primary">Update</button></a>
             <a href="delete.php?delete_id='.$id.'" ><button class="btn btn-sm btn-danger">Delete</button></a>    
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



          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('./inc/footer.php') ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include('./inc/scripts.php') ?>

  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#CareListTable').DataTable();
    });
  </script>

</body>
</html>
