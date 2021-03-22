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
    <h1 class="h3 mb-0 text-gray-800">Loc2 Dashboard</h1>
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

            <form id="loc31" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="Loc31" class="form-control" value= 'Loc2'>
                <input type="hidden" name="Loc3Total1" class="form-control" value= 'Total Entries'>
            <a   href="javascript:{}"  onclick="document.getElementById('loc31').submit();" VALUE='Loc31'>

              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Entries</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
             
             <?php
                
                $query = "SELECT * FROM covidtracker where site='loc2'";
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

           
            
            <form id="loc32" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="Loc32" class="form-control" value= 'Loc2'>
                <input type="hidden" name="Loc3Total2" class="form-control" value= 'Tests Done so far'>
            <a   href="javascript:{}"  onclick="document.getElementById('loc32').submit();" VALUE='Loc32'>

              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tests Done so far</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

             
            <?php
                    $query = $sql = "SELECT * FROM `covidtracker` where site='loc2' and Status=\"Done\" ";
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
                </form>
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
                <form id="loc33" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="Loc33" class="form-control" value= 'Loc2'>
                <input type="hidden" name="Loc3Total3" class="form-control" value= 'Pending Tests'>
            <a   href="javascript:{}"  onclick="document.getElementById('loc33').submit();" VALUE='Loc33'>
            
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pending Tests</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                  <?php
                    $query = $sql = "SELECT * FROM `covidtracker` where site='loc2' and Status=\"Pending\"";
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
            </div> </a></form>
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

            <form id="loc34" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="Loc34" class="form-control" value= 'Loc2'>
                <input type="hidden" name="Loc3Total4" class="form-control" value= 'Upcoming or Cancelled Test'>
            <a   href="javascript:{}"  onclick="document.getElementById('loc34').submit();" VALUE='Loc34'>

              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Upcoming or Cancelled Test </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                    $query  = "SELECT * FROM `covidtracker` where site='loc2' and Status=\"NA\"";
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
  </div>

 
  <?php
          $query = "SELECT ID, empno, Aadharno,Result,Testcount, count(*) FROM `covidtracker` group by Aadharno";
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
                       $res1= "SELECT Result FROM covidtracker where Site='loc2' and Aadharno = '$aadharno' and Testcount = $testcount ";
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
                         }
                         
                         $testcount2= $testcount-1;
                         
                       $res2= "SELECT Result  FROM `covidtracker` where site='loc2' and Aadharno = '$aadharno' and Testcount = $testcount2 ";
                       $query_run3 = mysqli_query($connection, $res2);
                       if(mysqli_num_rows($query_run3)>0)         
                       {
                           while($row = mysqli_fetch_assoc($query_run3))
                           {
                             
                             $res2r= $row['Result'];
                             
                           }
                         }
                         else
                         {
                            $res2r="nope";
                         }
                      
                      //   echo $res1;
                       //  echo $res2;

                         if ($res1r== "Negative" and $res2r == "Negative")
                           {
                             $fitcount = $fitcount + 1;
                           }
                             elseif ($res1r== "Positive" or $res2r == "Positive") 
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
        <form id="loc35" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="Loc35" class="form-control" value= 'Loc2'>
                <input type="hidden" name="Loc3Total5" class="form-control" value= 'Unique Entries'>
            <a   href="javascript:{}"  onclick="document.getElementById('loc35').submit();" VALUE='Loc35'>

          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Unique Entries</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">
         
                <?php
                

                $query = "SELECT Distinct(Aadharno) FROM `covidtracker` where site='loc2' ";
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
                    <form id="loc36" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="Loc36" class="form-control" value= 'Loc2'>
                <input type="hidden" name="Loc3Total6" class="form-control" value= 'Fit Count'>
            <a   href="javascript:{}"  onclick="document.getElementById('loc36').submit();" VALUE='Loc36'>
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
                    <form id="loc37" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="Loc37" class="form-control" value= 'Loc2'>
                <input type="hidden" name="Loc3Total7" class="form-control" value= 'UnFit Count'>
            <a   href="javascript:{}"  onclick="document.getElementById('loc37').submit();" VALUE='Loc37'>
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
            <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <form id="loc38" action="record.php" method="Post" class="was-validated" >
                <input type="hidden" name="Loc38" class="form-control" value= 'Loc2'>
                <input type="hidden" name="Loc3Total8" class="form-control" value= 'NA Count'>
            <a   href="javascript:{}"  onclick="document.getElementById('loc38').submit();" VALUE='Loc38'>
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">NA Count</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
              echo $na;
                   
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
</div>
<?php 
     ?>            
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
                
              
                $query = "SELECT * FROM covidtracker where site='loc2'";
                $query_run = mysqli_query($connection, $query);
            
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                         <tr>
                                <td><?php  echo $row['ID']; ?></td>
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