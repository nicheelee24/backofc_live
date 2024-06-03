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
          <h1>Win / Loss Report</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Reports</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="col-md-12">
    <div class="card">
      <div class="card-header">


        <br />
        <div class="row">
          <div class="form-group" placeholder="Select">
            <label>Period</label>
            <select class="custom-select">
              <option value="0">Any</option>
              <option value="1">Today</option>
              <option value="2">Yesterday</option>
              <option value="3">This Week</option>
              <option value="4">Last Week</option>
              <option value="5">This Month</option>
              <option value="6">Last Month</option>
            </select>
          </div>
          <div class="form-group">
            <label>Date Time</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-clock"></i></span>
              </div>
              <input type="text" class="form-control float-right" id="reservationtime">
            </div>
          </div>
          <div class="form-group">
            <label>Timezone</label>
            <input type="text" class="form-control" placeholder="Timezone">
          </div>
          <div class="form-group">
            <label>Platform</label>
            <input type="text" class="form-control" placeholder="Platform">
          </div>
          <div class="form-group">
            <label>Type</label>
            <select class="custom-select">
              <option value="-1">Select Game / Other Type</option>
              <option value="All">All</option>
              <option value="EGAME">EGAME</option>
              <option value="ESPORT">ESPORT</option>
              <option value="FISH">FISH</option>
              <option value="LIVE">LIVE</option>
              <option value="LOTTO">LOTTO</option>
              <option value="SLOT">SLOT</option>
              <option value="TABLE">TABLE</option>
              <option value="VIRTUAL">VIRTUAL</option>
              <option value="DEALER_TIPPING">Other - DEALER_TIPPING</option>
              <option value="PROMOTION">Other - PROMOTION</option>
              <option value="STREAMER_TIPPING">Other - STREAMER_TIPPING</option>
            </select>
          </div>

          <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" placeholder="Location">
          </div>
          <div class="form-group" placeholder="Select">
            <label>Currency</label>
            <select class="custom-select">
              <option value="-1">Select</option>
              <option value="CNY">CNY</option>
              <option value="THB">THB</option>

            </select>
          </div>
          <div class="form-group">

            <button type="button" style="margin-top:32px;margin-left:10px"
              class="btn btn-block btn-warning">Export</button>
          </div>

        </div>
        <h3 class="card-title">Win / Loss Stats</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0" style="overflow-x:scroll">

        <table class="table" style="width:100%;overflow:scroll">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>User ID</th>
              <th>User Name</th>
              <th>Platform</th>
              <th>Type</th>
              <th>Location</th>
              <th>Bet Count</th>
              <th>Valid Turnover</th>
              <th>Bet Amount</th>
              <th>Total Bet</th>
              <th><span style="color:blue;font-weight:bold">Player</span> Win/Loss</th>
              <th>Adjustment</th>
              <th>Total P/L</th>
              <th>Margin(%)</th>
              <th><span style="color:blue;font-weight:bold">Agent</span> PT Win/Loss</th>
              <th>Adjustment</th>
              <th>Total P/L</th>
              <th><span style="color:blue;font-weight:bold">Master Agent</span> PT Win/Loss</th>
              <th>Adjustment</th>
              <th>Total P/L</th>

              <th><span style="color:blue;font-weight:bold">Franchise Agent</span> Win/Loss</th>
              <th>Adjustment</th>
              <th>Total P/L</th>

              <th><span style="color:blue;font-weight:bold">Company</span> Total P/L</th>




            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>



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
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<?php
include 'layout/footer.php';
?>