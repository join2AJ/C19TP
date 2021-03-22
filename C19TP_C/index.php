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
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
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

            <form id="SEZ22" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="SEZ22" class="form-control" value= 'Database'>
                <input type="hidden" name="SEZTotal22" class="form-control" value= 'Total Entries'>
            <a   href="javascript:{}"  onclick="document.getElementById('SEZ22').submit();" VALUE='star22'>
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
                </a> </form>
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

            <form id="SEZ23" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="SEZ23" class="form-control" value= 'Database'>
                <input type="hidden" name="SEZTotal23" class="form-control" value= 'Tests Done so far'>
            <a   href="javascript:{}"  onclick="document.getElementById('SEZ23').submit();" VALUE='star23'>

           
           <!-- <a   href="testsdonesofar.php"> -->
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
                  </a> </form>
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
            <form id="SEZ24" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="SEZ24" class="form-control" value= 'Database'>
                <input type="hidden" name="SEZTotal24" class="form-control" value= 'Pending Tests'>
            <a   href="javascript:{}"  onclick="document.getElementById('SEZ24').submit();" VALUE='star24'>

          <!--  <a  href="pendingcovid19tests.php"> -->
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
            </div> </a> </form>
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
            <form id="SEZ25" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="SEZ25" class="form-control" value= 'Database'>
                <input type="hidden" name="SEZTotal25" class="form-control" value= 'Upcoming or Cancelled Test'>
            <a   href="javascript:{}"  onclick="document.getElementById('SEZ25').submit();" VALUE='star25'>

         <!--   <a   href="upcomingcancelledtest.php">   -->
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Upcoming or Cancelled Test </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                    $query = "SELECT * FROM `covidtracker` where Status=\"NA\"";
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
                  </a> </form>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
$query = "SELECT ID, empno, Aadharno,Date,Status,Result,Testcount, count(*) FROM `covidtracker` group by Aadharno";
                    $query_run = mysqli_query($connection, $query);
                
                    global $res1r;
                    global $res2r;
                    global $nope;
                    global $fitcount; $fitcount = 0;
                    global $unfitcount; $unfitcount = 0;;
                    global $na; $na =0;
                    $rowcount = mysqli_num_rows($query_run);
                  if(mysqli_num_rows($query_run) > 0)       
                  {
                      while($row = mysqli_fetch_assoc($query_run))
                      {
                       $aadharno = $row['Aadharno'];
                       $testcount= $row['count(*)']-1;
                       $res1= "SELECT * FROM covidtracker where  Aadharno = '$aadharno' and Testcount = $testcount ";
                       $query_run2 = mysqli_query($connection, $res1);
                      
                       if(mysqli_num_rows($query_run2)>0)    
                       {
                           while($row = mysqli_fetch_assoc($query_run2))
                           {
                             $res1r= $row['Result'];
                            
                                                                                   
                           }

                         }
                         else
                         {
                            $res1r="nope";
                            $aadhar1=" ";
                         }
                         
                         $testcount2= $testcount-1;
                         
                       $res2= "SELECT *  FROM `covidtracker` where  Aadharno = '$aadharno' and Testcount = $testcount2 ";
                       $query_run3 = mysqli_query($connection, $res2);
                       if(mysqli_num_rows($query_run3)>0)         
                       {
                           while($row = mysqli_fetch_assoc($query_run3))
                           {
                             
                             $res2r= $row['Result'];
                             $aadhar1=$row['Aadharno'];
                             
                           }
                         }
                         else
                         {
                            $res2r="nope";
                         }

                         if ($res1r== "Negative" and $res2r == "Negative")
                           {
                            $fitcount =$fitcount+1;
                           }elseif ($res1r== "Positive" or $res2r == "Positive") 
                           {
                             $unfitcount = $unfitcount + 1;
                           }
                           elseif ($res1r== "nope" and $res2r == "nope") 
                           {
                             
                           }
                             else
                             {
                               $na = $na + 1;
                             }
                               
                      } 
                    }
     ?>

  <!-- Content Row -->
  <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-primary shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">

        <form id="SEZ26" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="SEZ26" class="form-control" value= 'Database'>
                <input type="hidden" name="SEZTotal26" class="form-control" value= 'Unique Count'>
            <a   href="javascript:{}"  onclick="document.getElementById('SEZ26').submit();" VALUE='star26'>

       <!-- <a   href="index.php"> -->
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Unique Count</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">
         
                <?php

                 $query = $sql = "SELECT DISTINCT(Aadharno) FROM covidtracker ";
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
            </a></form>
        <div class="col-auto">
          <i class="fas fa-calendar fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>


        <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">

                    <form id="SEZ27" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="SEZ27" class="form-control" value= 'Database'>
                <input type="hidden" name="SEZTotal27" class="form-control" value= 'Fit Count'>
            <a   href="javascript:{}"  onclick="document.getElementById('SEZ27').submit();" VALUE='star27'>

               <!--     <a   href="index.php"> -->
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Fit Count</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                    
                    <?php
                            echo $fitcount;
                            
                                ?>
                    
                    </div>
                    </div>
                          </a></form>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <form id="SEZ28" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="SEZ28" class="form-control" value= 'Database'>
                <input type="hidden" name="SEZTotal28" class="form-control" value= 'UnFit Count'>
            <a   href="javascript:{}"  onclick="document.getElementById('SEZ28').submit();" VALUE='star28'>
                 <!--   <a   href="index.php"> -->
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">UnFit Count</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                    
                    <?php
                             echo $unfitcount;
                             
                                ?>
                    
                    </div>
                    </div>
                          </a></form>
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
            <form id="SEZ29" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="SEZ29" class="form-control" value= 'Database'>
                <input type="hidden" name="SEZTotal29" class="form-control" value= 'NA Count'>
            <a   href="javascript:{}"  onclick="document.getElementById('SEZ29').submit();" VALUE='star29'>
           <!-- <a   href="index.php"> -->  
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">NA Count</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                   echo $na;
                        ?>
              </div>
            </div>
                  </a> </form>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>         

</div>

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">Below mentioned DataTable represents the number of registered employees in database.
  <br>
  For more detail regarding enrollement & updation of below mentioned data, please visit the 
  <a target="_blank" href="tables.php">DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">COVID-19 Test Data</h6>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Aadharno</th>
                        <th>Empno</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Result</th>
                        <th>Testcount</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                
              
                $query = "SELECT * FROM covidtracker";
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
                                <td><?php  echo $row['Date']; ?></td>
                                <td><?php  echo $row['Status']; ?></td>
                                <td><?php  echo $row['Result']; ?></td>
                                <td><?php  echo $row['Testcount']; ?></td>

                                
                
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                 </tbody>
                <tfoot>
                <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Aadharno</th>
                        <th>Empno</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Result</th>
                        <th>Test</th>
                    </tr>
                </tfoot>
              
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>




  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>