<?php
  include 'layout/header.php'; 
  ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-3"></div>

          <div class="col-md-6">

          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">User Profile</h3>
              </div> 
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label>User ID</label>
                    <input type="text" class="form-control"  placeholder="User ID">
                  </div>
                  <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control"  placeholder="User Name">
                  </div>
                  <div class="form-group">
                    <label>Currency</label>
                    <input type="text" class="form-control"  placeholder="Currency">
                  </div>
                  <div class="form-group">
                    <label>Account Type</label>
                    <input type="text" class="form-control"  placeholder="Account Type">
                  </div>
                  <div class="form-group">
                    <label>Created On</label>
                    <input type="text" class="form-control"  placeholder="Created On">
                  </div>
                  <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control"  placeholder="Password">
                  </div>

                 
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.col -->
     
          <!-- /.col -->
        </div>
        <div class="col-md-3"></div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>            

  <?php
  include 'layout/footer.php'; 
  ?>
 