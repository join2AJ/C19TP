<?php
include('includes/header.php'); 
include('includes/navbar.php'); 


               $server_name = "localhost";
                $db_username = "root";
                $db_password = "";
                $db_name = "employee";
                
                $connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

?>

<!-- Begin Page Content -->
<div class="container-fluid">



  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">EMPLOYEE WISE TESTS DONE SO FAR</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <a   href="index.php">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Entries</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
             
             <?php
                
                $query = "SELECT * FROM covidtracker";
                $query_run = mysqli_query($connection, $query);

                if($query_run)
                 {
                    $rowcount= mysqli_num_rows($query_run);
                    printf("%d",$rowcount) ;
                    mysqli_free_result($query_run);
                 }
                  
                 
            ?>
               

              </div>
            </div>
                </a>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <a   href="testsdonesofar.php">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tests Done so far</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

             
            <?php
                    $query = $sql = "SELECT * FROM `covidtracker` where Status=\"Done\" ";
                    $query_run = mysqli_query($connection, $query);
                    if($query_run)
                    {
                       $rowcount= mysqli_num_rows($query_run);
                       printf("%d",$rowcount) ;
                       mysqli_free_result($query_run);
                    }
                        ?>
            
            </div>
            </div>
                  </a>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
   

    <!-- Earnings (Monthly) Card Example -->
   
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <a  href="pendingcovid19tests.php">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pending Tests</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                  <?php
                    $query = $sql = "SELECT * FROM `covidtracker` where Status=\"Pending\"";
                    $query_run = mysqli_query($connection, $query);
                    if($query_run)
                    {
                       $rowcount= mysqli_num_rows($query_run);
                       printf("%d",$rowcount) ;
                       mysqli_free_result($query_run);
                    }
                        ?>
                  </div>
                </div>
              </div>
            </div> </a>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <a   href="upcomingcancelledtest.php">   
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Upcoming or Cancelled Test </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                    $query = $sql = "SELECT * FROM `covidtracker` where Status=\"NA\"";
                    $query_run = mysqli_query($connection, $query);
                    if($query_run)
                    {
                       $rowcount= mysqli_num_rows($query_run);
                       printf("%d",$rowcount) ;
                       mysqli_free_result($query_run);
                    }
                        ?>
              </div>
            </div>
                  </a>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">
                    Below mentioned DataTable represents Employee wise tests conducted.
                    <br>
                    For more detail regarding enrollement & updation of below mentioned data, please visit the 
                    <a target="_blank"   href="http://localhost/covidtracker/admin/tables.php"> DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Conducted Tests Datasheet</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Aadhar no</th>
                                            <th>Employee no</th>
                                            <th>Mobile</th>
                                            <th>Test Count</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>id</th>
                                            <th>Name</th>
                                            <th>Aadhar no</th>
                                            <th>Employee no</th>
                                            <th>Mobile</th>
                                            <th>Test Count</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                
                $query = $sql = "SELECT * ,count(*) FROM `covidtracker` where Status=\"Done\" group by empno";
                $query_run = mysqli_query($connection, $query);
            
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                         <tr>
                                <td><?php  echo $row['ID']; ?></td>
                                <td><?php  echo $row['Name']; ?></td>
                                <td><?php  echo $row['Aadharno']; ?></td>
                                <td><?php  echo $row['Empno']; ?></td>
                                <td><?php  echo $row['Mobileno']; ?></td>
                                <td><?php  echo $row['count(*)']; ?></td>
                               
                
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <?php
include('includes/scripts.php');
include('includes/footer.php');
?>