<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 

$connection = mysqli_connect("localhost","root","","Employee");

?>

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
            <div class="input-group mb-3">
<div class="input-group-prepend">
    <label class="input-group-text"  for="inputGroupResult00">Site</label>
  </div>
  <select class="custom-select" name="Site" id="inputGroupResult00" value="NA">
    <option value="NA">NA</option>
    <option value="Loc1">Loc1</option>
    <option value="Loc2">Loc2</option>
    <option value="Loc3">Loc3</option>
    <option value="Loc4">Loc4</option>
    <option value="Loc5">Loc5</option>
    <option value="Loc6">Loc6</option>
    <option value="Loc7">Loc7</option>  
    <option value="Loc8">Loc8</option>
    <option value="Loc9">Loc9</option>
    <option value="Loc10">Loc10</option>


  </select>
</div>
<div class="form-group">
                <label > Mobile Number </label>
                <input type="text" name="Mobileno" class="form-control" placeholder="Enter Mobile Number" required>
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

<div class="form-group">
                <label > Stay Location </label>
                <input type="text" name="Stayloc" class="form-control" placeholder="Enter Staying Location" >
            </div>

            <div class="form-group">
                <label > Agency </label>
                <input type="text" name="Agency" class="form-control" placeholder="Enter Agency name" >
            </div>
            <div class="form-group">
                <label>DOB</label>
                <input type="Date" name="DOB"   class="form-control" placeholder="Date of Birth" >
           
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



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>