<?php
include "api__url.php";


$mongo = new MongoDB\Driver\Manager("mongodb://mongo:28fc57372da610bb6dd6@156.67.219.66:8081");
$filter=[];
$options = ['sort' => ['betTime' => -1]];
$query = new MongoDB\Driver\Query($filter,$options);
$rows = $mongo->executeQuery('ama.bets',$query);
$betsArr = $rows->toArray();
//echo json_encode($rowsArr);



//$m->connect();

//curl_setopt($curl, CURLOPT_URL, "".$api_url."report/history/bets.php");
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);




include 'layout/header.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

      <div class="row mb-2">
        <div class="col-sm-6">

          <div class="col-sm-3"></div>
          <h1>History</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">History</li>
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
        <h3 class="card-title">Bets History</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0" style="overflow-x:scroll">

        <table class="table" style="width:100%;overflow:scroll">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>User ID</th>
              <th>Game Type</th>
              <th>Game Name</th>
              <th>Game Code</th>
              <th>Platform</th>
              <th>PlatformTxId</th>
              <th>Currency</th>
              <th>Bet Time</th>
              <th>Bet Amount</th>
              <th>Turnover Amount</th>
              <th>Win Amount</th>





            </tr>
          </thead>
          <tbody>
            <?php 
            $cnt=1;
foreach($betsArr as $bet)
{
            ?>
            <tr>
              <td><?php echo $cnt;?></td>
              <td><?php echo $bet->userId; ?></td>
              <td><?php echo $bet->gameType; ?></td>
              <td><?php 
              if(property_exists($bet, 'gameName'))
              {
                echo $bet->gameName; 
              }else
              {
                echo '';
              }
              ?></td>
              
              <td><?php echo $bet->gameCode; ?></td>
              <td><?php echo $bet->platform; ?></td>
              <td><?php echo $bet->platformTxId; ?></td>
              <td><?php 
              if(property_exists($bet, 'currency'))
              {
                echo $bet->currency; 
              }else
              {
                echo '';
              }
              ?></td>
              
             
              <td><?php 
              if(property_exists($bet, 'betTime'))
              {
                $timestamp = $bet->betTime;
$datetime = new DateTime("@$timestamp");
echo $datetime->format('d-m-Y h:i:s');
              }else
              {
                echo '';
              }
              ?></td>
               <td><?php 
              if(property_exists($bet, 'betAmount'))
              {
                echo $bet->betAmount; 
              }else
              {
                echo '';
              }
              ?></td>
              <td><?php 
              if(property_exists($bet, 'turnover'))
              {
                echo $bet->turnover; 
              }else
              {
                echo '';
              }
              ?></td>
              <td><?php 
              if(property_exists($bet, 'winAmount'))
              {
                if($bet->winAmount>0)
                {
                  echo '<span style="color:green;font-weight:bold;font-size:14px">'.$bet->winAmount.'</span>';
                }
                else
                {
                echo '<span style="color:#cfcfcf;font-size:14px">'.$bet->winAmount.'</span>';
                
              
                }
              }else
              {
                echo '';
              }
              ?></td>





            </tr>
<?php
$cnt++;
          }
?>



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