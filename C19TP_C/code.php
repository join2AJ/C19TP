<?php

include('security.php');
$connection = mysqli_connect("localhost","root","","Employee");

if(isset($_POST['registerbtn']))
{
    $empno = $_SESSION['EmpNo'];
    $date = $row['Date'];
    $status = $row['Status'];
    $name1 = $row['name1'];
    $aadhar1 = $row['aadhar1'];
    $result = $row['Result'];
    $remember = $row['remember'];
    $test = $row['Test'];


    $Stayloc =  $row['Stayloc'];
    $Agency  =  $row['Agency'];
    $DOB     =  $row['DOB'];
    $Site    =  $row['Site'];
    $Mobileno=  $row['Mobileno'];

    $empno=preg_replace("/[^a-zA-Z]+/","",$empno);
    $name1=preg_replace("/[^a-zA-Z]+/","",$name1);
    //$aadhar1=preg_replace("/[^a-zA-Z]+/","",$aadhar1);

    /* casting to make sure integer value for this field(Test) */
    $test = (int) @$_POST["Test"];
    $empno = (String) @$_POST["EmpNo"];
    $status = (String) @$_POST["Status"];
    $name1 = (String) @$_POST["name1"];
    $aadhar1 = (String) @$_POST["aadhar1"];
    $result = (String) @$_POST["Result"];
    $date = (String) @$_POST["Date"];

    $Stayloc =  (String) @$_POST['Stayloc'];
    $Agency  =  (String) @$_POST['Agency'];
    $DOB     =  (String) @$_POST['DOB'];
    $Site  =  (String) @$_POST['Site'];
    $Mobileno     =  (String) @$_POST['Mobileno'];

    $query = "select * from covidtracker where Aadharno='$aadhar1'";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
       //$rowcount= mysqli_num_rows($query_run);
        // echo "<script> alert('$rowcount')</script>";

      if(mysqli_num_rows($query_run) > 0)
      {
        $_SESSION['success'] = "For Updating records use Update tab";
        header('Location: register.php');         
      }
      else
         {
            $test=0;
            $query1 = "INSERT INTO covidtracker (Name,Empno,Aadharno,Date,Status,Result,Testcount,Stayloc,Agency,DOB,Site,Mobileno) VALUES 
            ('$name1','$empno','$aadhar1','$date','$status','$result','$test','$Stayloc,'$Agency,'$DOB','$Site,'$Mobileno')";
             $query_run1 = mysqli_query($connection, $query1);
    
                 $test = $test +1;
                 $date=date_create($date);
                 $date= date_add($date,date_interval_create_from_date_string("10 days"));
                 $date2= date_format($date,"Y-m-d");
                 $date2 = (String) $date2;
                 $status="NA";
                 $result="NA";
    
            $query2 = "INSERT INTO covidtracker (Name,Empno,Aadharno,Date,Status,Result,Testcount) VALUES 
            ('$name1','$empno','$aadhar1','$date2','$status','$result','$test')";
              $query_run2 = mysqli_query($connection, $query2);
    
              if($query_run2){
                $_SESSION['success'] = "Initial and 1st Test Record added in Database";
                header('Location: register.php');
                 }
         }
        

      /*
       $test = $rowcount +1;

       $query = "INSERT INTO covidtracker (EmpNo,Date,Status,Result,Test) VALUES 
       ('$empno',' $date','$status','$result','$test')";
        $query_run = mysqli_query($connection, $query);

         if($query_run)
            {
              //echo Saved
             $_SESSION['success'] = "Record added in Database";
             // header('Location: register.php');

             //  $_SESSION['status'] = "Record added in Database";
             //  $_SESSION['status_code'] = "success";
                 header('Location: register.php');
             }
        else
            {

             $_SESSION['status'] = "Record NOT added in Database: Error-1";
             //  header('Location: register.php');

             //  $_SESSION['status'] = "Record NOT added in Database";
            //   $_SESSION['status_code'] = "error";
             header('Location: register.php');  
             }*/
        }
    else
    {
        $_SESSION['success'] = "Record NOT added in Database: Error-2, Consult Developer";
        header('Location: register.php');

    }

}


if(isset($_POST['updatebtn']))
{
    $empno =  $_SESSION['editEmpNo'];
    $id=      $row['edit_it'];
    $date =   $row['editDate'];
    $status=  $row['editStatus'];
    $name1 =  $row['editname1'];
    $aadhar1= $row['editaadhar1'];
    $result = $row['editResult'];
    $test   = $row['editTest'];

    $empno=preg_replace("/[^a-zA-Z]+/","",$empno);
    $name1=preg_replace("/[^a-zA-Z]+/","",$name1);
    //$aadhar1=preg_replace("/[^a-zA-Z]+/","",$aadhar1);

    /* casting to make sure integer value for this field(Test) */
    $empno = (String) @$_POST["editEmpNo"];
    $id=(int) @$_POST["edit_it"];
    $date = (String) @$_POST["editDate"];
    $status = (String) @$_POST["editStatus"];
    $name1 = (String) @$_POST["editname1"];
    $aadhar1 = (String) @$_POST["editaadhar1"];
    $result = (String) @$_POST["editResult"];
    $test = (int) @$_POST["editTest"];
    

   // $query1 = "select Aadharno from covidtracker where id=$id"; $query_run = mysqli_query($connection, $query1); $query1=mysqli_fetch_assoc($query_run);
   // $query4 = "select Result from covidtracker where id=$id"; $query_run = mysqli_query($connection, $query4);$query4=mysqli_fetch_assoc($query_run);
   // $query3 = "select Testcount from covidtracker where id=$id"; $query_run = mysqli_query($connection, $query3);$query3=mysqli_fetch_assoc($query_run);
   // $query2 = "select Result from covidtracker where Aadharno=$query1 and Test=$query3-1"; $query_run = mysqli_query($connection, $query2);$query2=mysqli_fetch_assoc($query_run);

    $query = "update covidtracker SET Name='$name1',Empno='$empno',Aadharno='$aadhar1',
    Date='$date',Status='$status',Result='$result',Testcount='$test' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
        {

            global $res1;
            global $res2;
            global $testcount; $testcount = 0;
            global $fitcount; $fitcount = 0;
            global $unfitcount; $unfitcount = 0;;
            global $na; $na =0;

            $query9 = "SELECT ID, Empno, Name, Aadharno,Result,Testcount,count(*) FROM covidtracker where Aadharno ='$aadhar1' group by Aadharno ";
            $query_run9 = mysqli_query($connection, $query9);
            if(mysqli_num_rows($query_run9) > 0)       
            {
                while($row = mysqli_fetch_assoc($query_run9))
                {
                    $testcount= $row['count(*)']-1;
                    $empno=$row['Empno'];
                    $name1=$row['Name'];
                    $aadhar1=$row['Aadharno'];
                }
            }

            $res1= "SELECT Result,Date FROM covidtracker where Aadharno = '$aadhar1' and Testcount = $testcount ";
            $query_run2 = mysqli_query($connection, $res1);
            if(mysqli_num_rows($query_run2)>0)    
            {
                   
                while($row = mysqli_fetch_assoc($query_run2))
                {
                       $res1= $row['Result'];
                       $date1= $row['Date'];
                       
                }

            }
                   
            $testcount2= $testcount-1;
                   
            $res2= "SELECT Result  FROM `covidtracker` where Aadharno = '$aadhar1' and Testcount = $testcount2 ";
            $query_run3 = mysqli_query($connection, $res2);
            if(mysqli_num_rows($query_run3)>0)         
            {
                while($row = mysqli_fetch_assoc($query_run3))
                {
                $res2= $row['Result'];
                }
            }

            if ($res1== "Positive" and $res2 == "Positive")
            {
                        $date=date_create($date1);
                        $date= date_add($date,date_interval_create_from_date_string("10 days"));
                        $date2= date_format($date,"Y-m-d");
                        $date2 = (String) $date2;
                        $status="NA";
                        $result="NA";
                        $test=$testcount+1;

                        $query8 = "INSERT INTO covidtracker (Name,Empno,Aadharno,Date,Status,Result,Testcount) VALUES 
                        ('$name1','$empno','$aadhar1','$date2','$status','$result','$test')";
                          $query_run8 = mysqli_query($connection, $query8);
                
                          if($query_run8)
                          {
                            $_SESSION['success'] = "Record Updated";
                            header('Location: register.php');
                          }
            }
            elseif ($res1== "Positive" and $res2 == "Negative")
            {
                        $date=date_create($date1);
                        $date= date_add($date,date_interval_create_from_date_string("4 days"));
                        $date2= date_format($date,"Y-m-d");
                        $date2 = (String) $date2;
                        $status="NA";
                        $result="NA";
                        $test=$testcount+1;

                        $query8 = "INSERT INTO covidtracker (Name,Empno,Aadharno,Date,Status,Result,Testcount) VALUES 
                        ('$name1','$empno','$aadhar1','$date2','$status','$result','$test')";
                          $query_run8 = mysqli_query($connection, $query8);
                
                          if($query_run8)
                          {
                            $_SESSION['success'] = "Record Updated";
                            header('Location: register.php');
                          }
            }
            elseif ($res1== "Negative" and $res2 == "Positive")
            {
                            $date=date_create($date1);
                            $date= date_add($date,date_interval_create_from_date_string("7 days"));
                            $date2= date_format($date,"Y-m-d");
                            $date2 = (String) $date2;
                            $status="NA";
                            $result="NA";
                            $test=$testcount+1;
    
                            $query8 = "INSERT INTO covidtracker (Name,Empno,Aadharno,Date,Status,Result,Testcount) VALUES 
                            ('$name1','$empno','$aadhar1','$date2','$status','$result','$test')";
                              $query_run8 = mysqli_query($connection, $query8);
                    
                              if($query_run8)
                              {
                                $_SESSION['success'] = "Record Updated";
                                header('Location: register.php');
                              }
            }
            else
            {
                            $_SESSION['success'] = "Error Contact Developer";
                            header('Location: register.php');
            }
        }
        else
        {
                            $_SESSION['success'] = "Error Contact Developer";
                            header('Location: register.php');
        }
        
 }
 else
        {
                            $_SESSION['success'] = "querry not set Contact Developer";
                            header('Location: register.php');
        }
?>