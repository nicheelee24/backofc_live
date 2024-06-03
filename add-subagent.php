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
            <li class="breadcrumb-item active">Manage Sub Agent</li>
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
              <h3 class="card-title">Add Sub Agent</h3>
            </div>
            <form method="post" action="manage-subagent.php">
              <div class="card-body">
                <div class="form-group">
                  <label>User ID</label>
                  <input type="text" class="form-control" placeholder="User ID">
                </div>
                <div class="form-group">
                  <label>User Name</label>
                  <input type="text" class="form-control" placeholder="User Name">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" class="form-control" placeholder="Confirm Password">
                </div>

                <div class="form-group">

                  Permissions
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="Permissions" value="All Fraud Tools">
                    <label for="Permissions" class="custom-control-label">All Fraud Tools</label>


                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="SexyHedgingDetection">
                    <label class="form-check-label">Sexy Hedging Detection</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input"  type="checkbox"
                      value="VenusHedgingDetection">
                    <label class="form-check-label">Venus Hedging Detection</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input"  type="checkbox"
                      value="SkyCasinoHedgingDetection">
                    <label class="form-check-label">Sky Casino Hedging Detection</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="allMembers" value="All Members">
                    <label for="allMembers" class="custom-control-label">All Members</label>


                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="memUpdate">
                    <label class="form-check-label">Update Member</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="memView">
                    <label class="form-check-label">View Member</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="allReports" value="All Reports">
                    <label for="allReports" class="custom-control-label">All Reports</label>


                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="report1">
                    <label class="form-check-label">Report 1</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="report2">
                    <label class="form-check-label">Report 2</label>
                  </div>

                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
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