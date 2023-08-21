
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Care Giver|  Dashboard</title>

  <?php include('./inc/styles.php') ?> 
</head>
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
            <h1 class="m-0"> Add User</h1>
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
        <div class="col-md-8 mx-auto">
        
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="insert.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="" name="name" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" class="form-control" id="" name="phone_no" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
                    <input type="text" class="form-control" id="" name="class" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="">Role</label>
                   <select name="role" id="">
                    <option muted selected disabled>Select Role</option>
                    <option value="1">Student</option>
                    <option value="2">Teacher</option>
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="" name="address" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Age</label>
                    <input type="number" class="form-control" id="" name="age" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="" name="email" placeholder="">
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                 
        
                
                 
                </div>
              </form>
            </div>
        
            
            
        </div>
    
       </div>
        <!-- /.row -->
        <!-- Main row -->
     
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


</body>
</html>
