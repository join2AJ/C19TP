<?php
include('includes/header.php'); 
include('includes/navbar.php'); 


               $server_name = "localhost";
                $db_username = "root";
                $db_password = "";
                $db_name = "Employee";
                
                $connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

  </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">
                    Below mentioned DataTable represents the number of registered employees those who will be 
                    having their COVID-19 test in coming time.
                    <br>
                    For more detail regarding enrollement & updation of below mentioned data, please visit the <a target="_blank"
                            href="http://localhost/covidtracker/admin/tables.php"> DataTables documentation</a>.</p>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
</div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <?php
include('includes/scripts.php');
include('includes/footer.php');
?>