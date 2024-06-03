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
          <h1>Manage Sub Agents</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage Sub Agents</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Sub Agents </h3>

        <div class="card-tools">
          <a class="btn btn-primary" href="add-subagent.php" role="button">Add Sub Agent</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <table class="table">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>User ID</th>
              <th>User Name</th>
              <th>Login Failure</th>
              <th>Permissions</th>
              <th>Password Lock</th>

              <th>Status</th>
              <th colspan="4" style="width:90px">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>SBAG001</td>
              <td>Sub agent 1</td>
              <td>0</td>
              <td>All</td>
              <td>Locked</td>

              <td style="color:green;">Active</td>
              <td><button type="button" class="btn btn-outline-success">Suspend</button>
                <button type="button" class="btn btn-info">View</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </td>
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