<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 

$connection = mysqli_connect("localhost","root","","Employee");

if(isset($_POST['updatebin']))
{
    $id = $_POST['edit_it'];
    $query = "select * from covidtracker where ID=$id";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    { 
?>

<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="m-0 font-weight-bold text-primary">Edit | Update Record</h6>
      </div>


<form action="code.php" method="post" >
<div class="modal-body">
        <div class="form-group">
                <label > Name </label>
                <input type="text" name="editname1" class="form-control" placeholder="Enter Name" required value="<?php echo $row['Name'] ?> ">
            </div>
            <div class="form-group">
                <label > Aadhar Number </label>
                <input type="text" name="editaadhar1" class="form-control" placeholder="XXXXXXXXXXXX" required value="<?php echo $row['Aadharno'] ?>" >
            </div>
            <div class="form-group">
                <label > Emplyee Number </label>
                <input type="text" name="editEmpNo" class="form-control" placeholder="Enter Employee Number" value="<?php echo $row['Empno'] ?>">
            </div>

            <div class="input-group mb-3">
<div class="input-group-prepend">
    <label class="input-group-text"  for="inputGroupResult00">Site</label>
  </div>
  <select class="custom-select" name="editSite" id="inputGroupResult00">
  <option selected><?php echo $row['Site'] ?></option>
    <option value="NA">NA</option>
    <option value="Loc3">Loc3</option>
    <option value="Loc4">Loc4</option>
    <option value="Loc5">Loc5</option>
    <option value="Loc6">Loc6</option>
    <option value="Loc7">Loc7</option>  
    <option value="Loc1">Loc1</option>
    <option value="Loc9">Loc9</option>
    <option value="Loc10">Loc10</option>
    <option value="Loc2">Loc2</option>
    <option value="Loc8">Loc8</option>
  </select>
</div>
<div class="form-group">
                <label > Mobile Number </label>
                <input type="text" name="editMobileno" value=<?php echo $row['Mobileno'] ?>  class="form-control" placeholder="Enter Mobile Number" required>
            </div>


            <div class="form-group">
                <label>Date</label>
                <input type="Date" name="editDate"   class="form-control" placeholder="Enter Test Date" value="<?php echo $row['Date'] ?>">
           
              </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text"  for="inputGroupSelect02">Status</label>
  </div>
  <select class="custom-select" name="editStatus" id="inputGroupSelect02" >
  <option selected><?php echo $row['Status'] ?></option>
    <option value="NA">NA</option>
    <option value="Pending">Cancelled</option>
    <option value="Pending">Pending</option>
    <option value="Done">Done</option>
  </select>
</div>

<div class="input-group mb-3">
<div class="input-group-prepend">
    <label class="input-group-text"  for="inputGroupResult02">Result</label>
  </div>
  <select class="custom-select" name="editResult" id="inputGroupResult02" >
  <option selected><?php echo $row['Result'] ?></option>
    <option value="NA">NA</option>
    <option value="Positive">Positive</option>
    <option value="Negative">Negative</option>
  </select>
</div>

<div class="form-group">
                <label > Stay Location </label>
                <input type="text" name="editStayloc" class="form-control" value=<?php echo $row['Stayloc'] ?>  placeholder="Enter Staying Location" >
            </div>

            <div class="form-group">
                <label > Agency </label>
                <input type="text" name="editAgency" class="form-control" value=<?php echo $row['Agency'] ?> placeholder="Enter Agency name" >
            </div>
            <div class="form-group">
                <label>DOB</label>
                <input type="Date" name="editDOB"   class="form-control" value=<?php echo $row['DOB'] ?>  placeholder="Date of Birth" >
           
              </div>  


<input type="hidden" value=<?php echo $row['Testcount'] ?> name="editTest" class="form-control" >
<input type="hidden" value=<?php echo $row['ID'] ?> name="edit_it" class="form-control"  >
<a href="register.php" class="btn btn-danger"> Cancel</a>
<button type="submit" name="updatebtn" class="btn btn-primary">Save</button>

        </div>
      
    </form>
    </div>
    </div>

        <?php
    }
}

include('includes/scripts.php');
include('includes/footer.php');
?>