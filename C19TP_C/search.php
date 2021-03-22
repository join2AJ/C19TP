<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

$connection = mysqli_connect("localhost","root","","Employee");

if(isset($_POST['searchbtn']))
{
   
    //$aadhar1=preg_replace("/[^a-zA-Z]+/","",$aadhar1);

    /* casting to make sure integer value for this field(Test) */
 
    $searhdata = (String) @$_POST["searchfield"];

?>
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Search result for <?php echo $searhdata ?></h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
      class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
                        <th>Aadharno</th>
                        <th>Empno</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Result</th>
                        <th>Testcount</th>
                        <th>Stay Location</th>
                        <th>Agency</th>
                        <th>Site</th>
                        <th>Mobile</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                
              
                $query = "select * from covidtracker where Aadharno='$searhdata' or empno='$searhdata' or Mobileno='$searhdata'";
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
                                <td><?php  echo $row['Stayloc']; ?></td>
                                <td><?php  echo $row['Agency']; ?></td>
                                <td><?php  echo $row['Site']; ?></td>
                                <td><?php  echo $row['Mobileno']; ?></td>
                
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "Enter correct Mobile no or Aadharno or Employee no";
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
                        <th>Testcount</th>
                        <th>Stay Location</th>
                        <th>Agency</th>
                        <th>Site</th>
                        <th>Mobile</th>
                    </tr>
                </tfoot>
              
            </table>
        </div>
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

}

include('includes/scripts.php');
include('includes/footer.php');

?>