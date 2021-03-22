<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 

$connection = mysqli_connect("localhost","root","","Employee");

?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add COVID-19 Test Data</h5>
      </div>

      <form action="code.php" method="post" class="was-validated">

        <div class="modal-body">

        <div class="form-group">
                <label > Name </label>
                <input type="text" name="name1" class="form-control" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label > Aadhar Number </label>
                <input type="text" name="aadhar1" class="form-control" placeholder="XXXXXXXXXXXX" required>
            </div>

            <div class="form-group">
                <label > Employee Number </label>
                <input type="text" name="EmpNo" class="form-control" placeholder="Enter Employee Number" required>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="Date" name="Date"   class="form-control" placeholder="Enter Test Date" required>
           
              </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text"  for="inputGroupSelect01">Status</label>
  </div>
  <select class="custom-select" name="Status" id="inputGroupSelect01" value="NA">
    <option value="NA">NA</option>
    <option value="Pending">Cancelled</option>
    <option value="Pending">Pending</option>
    <option value="Done">Done</option>
  </select>
</div>

<div class="input-group mb-3">
<div class="input-group-prepend">
    <label class="input-group-text"  for="inputGroupResult01">Result</label>
  </div>
  <select class="custom-select" name="Result" id="inputGroupResult01" value="NA">
    <option value="NA">NA</option>
    <option value="Positive">Positive</option>
    <option value="Negative">Negative</option>
  </select>
</div>

<div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I have complete authority to add data here and Entered data is accurate 
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div>

<div class="form-group">
           <!--   
        <input type="text" name="test" class="form-control" placeholder="Test Count" disabled>
            -->
            <input type="hidden" value="999" name="Test" class="form-control" placeholder="Test Count" >
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <form action="addrecords.php" method="post" class="was-validated">
        <h6 class="m-0 font-weight-bold text-primary">COVID-19 Test Data   

<!--
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Records
            </button>
-->
            
            
              <button type="submit" class="btn btn-primary" data-toggle="modal">
              Add Records now
            </button>
          </form>

        </h6>
        <h6 class="m-0 font-weight-bold text-primary">

       
        <?php

if (isset($_SESSION['success']) && $_SESSION['success']!="")
{
    echo  $_SESSION['success'];
    unset ($_SESSION['success']);
  
}

?>
</h6>
    </div>

 
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Aadhar no</th>
                        <th>Empno</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Result</th>
                        <th>Test</th>
                        <th>Stayloc</th>
                        <th>Mobile</th>
                        <th>DOB</th>
                        <th>Update</th>
                        
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
                                <td><?php  echo $row['Stayloc']; ?></td>
                                <td><?php  echo $row['Mobileno']; ?></td>
                                <td><?php  echo $row['DOB']; ?></td>

                                <td>
                                <form action="updaterecords.php" method="post" class="was-validated">
                                <input type="hidden" name="edit_it" class="form-control" value= <?php  echo $row['ID']; ?>>
                                <button type="submit" name="updatebin" class="btn btn-primary">Update</button>
                            </form>
                              </td>
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
                        <th>Aadhar no</th>
                        <th>Empno</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Result</th>
                        <th>Test</th>
                        <th>Stayloc</th>
                        <th>Mobile</th>
                        <th>DOB</th>
                        <th>Update</th>
                    </tr>
                </tfoot>
              
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<div class="container-fluid">


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>