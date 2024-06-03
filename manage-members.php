<?php
  include 'layout/header.php'; 
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        
        <div class="row mb-2">
          <div class="col-sm-6">

          <div class="col-sm-3"></div>
            <h1>Manage Members</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Members</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Members</h3>

                <div class="card-tools">
                <a class="btn btn-primary" href="add-member.php" role="button">Add Member</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table" >
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>User ID</th>
                      <th>Prefix</th>
                      <th>User Name</th>
                      <th>Currency</th>
                      <th>Wallet Type</th>
                      <th>Cert</th>
                      <th>Login Failure</th>
                      <th>Password Lock</th>
                      <th>Status</th>
                      <th colspan="3" style=" width: 90px;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td >1.</td>
                      <td >Luckagent</td>
                      <td>dot</td>
                      <td >Luckagent</td>
                      <td>CNY, THB</td>
                      <td >Single</td>
                      <td>111111</td>
                      <td >0</td>
                      <td>lock</td>
                      <td style="color:green">Active</td>
                      <td><button type="button" class="btn btn-outline-success">Suspend</button>
                        <button type="button" class="btn btn-info">View</button>
                      
                      <button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>


                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
               
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>         

  <?php
  include 'layout/footer.php'; 
  ?>
 