<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 

$connection = mysqli_connect("localhost","root","","Employee");
?>



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

if(isset($_POST['Loc3']))
{
    $site = $_POST['Loc3'];
    
    $query = "select * from covidtracker where Site='$site'";
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
                        else 
                        {
                            echo "No Record Found1";
                        }

                        ?>
<?php
}                
else

{
    echo $site;
   // echo $query;
    echo "No Record Found2";
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