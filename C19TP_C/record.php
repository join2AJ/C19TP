<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
$connection = mysqli_connect("localhost","root","","Employee");

global $site;
global $Loc3Total;
global $query1;
global $flag; $flag=0;
global $aadhar1;

if(isset($_POST['Loc322']))
{   $flag=22;
    $site = $_POST['Loc322'];
    $Loc3Total = $_POST['Loc3Total22'];
    $query = "SELECT count(*) AS counted FROM covidtracker ";
}
elseif(isset($_POST['Loc323']))
{   $flag=23;
    $site = $_POST['Loc323'];
    $Loc3Total = $_POST['Loc3Total23'];
    $query = "SELECT count(*) FROM `covidtracker` where Status=\"Done\" ";
}
elseif(isset($_POST['Loc324']))
{   $flag=24;
    $site = $_POST['Loc324'];
    $Loc3Total = $_POST['Loc3Total24'];
    $query = "SELECT count(*) FROM `covidtracker` where Status=\"Pending\"";
}
elseif(isset($_POST['Loc325']))
{   $flag=25;
    $site = $_POST['Loc325'];
    $Loc3Total = $_POST['Loc3Total25'];
    $query = "SELECT count(*) FROM `covidtracker` where Status=\"NA\"";
}
elseif(isset($_POST['Loc326']))
{   $flag=26;
    $site = $_POST['Loc326'];
    $Loc3Total = $_POST['Loc3Total26'];
    $query = "SELECT count(Distinct Aadharno) FROM `covidtracker`";
}
elseif(isset($_POST['Loc327']))
{   $flag=27;
    $site = $_POST['Loc327'];
    $Loc3Total = $_POST['Loc3Total27'];
   // $query = "SELECT count(*) FROM `covidtracker` where Status=\"Pending\"";
}
elseif(isset($_POST['Loc328']))
{   $flag=28;
    $site = $_POST['Loc328'];
    $Loc3Total = $_POST['Loc3Total28'];
  //  $query = "SELECT count(*) FROM `covidtracker` where  Status=\"Pending\"";
}
elseif(isset($_POST['Loc329']))
{   $flag=29;
    $site = $_POST['Loc329'];
    $Loc3Total = $_POST['Loc3Total29'];
    //$query = "SELECT count(*) FROM `covidtracker` where  Status=\"Pending\"";
}
elseif(isset($_POST['Loc31']))
{   $flag=1;
    $site = $_POST['Loc31'];
    $Loc3Total = $_POST['Loc3Total1'];
    $query = "SELECT count(*) AS counted FROM covidtracker where Site='$site'";
  //  $query1 = '"SELECT count(*) AS counted FROM covidtracker where Site='$site'";';
}
elseif(isset($_POST['Loc32']))
{   $flag=2;
    $site = $_POST['Loc32'];
   // $site ="Loc3";
    $Loc3Total = $_POST['Loc3Total2'];
    $query = "SELECT count(*) FROM `covidtracker` where Site='$site' and Status=\"Done\" ";
    //$query1 = '"SELECT count(*) FROM `covidtracker` where Site='$site' and Status=\"Done\" ";';
}
elseif(isset($_POST['Loc33']))
{   $flag=3;
    $site = $_POST['Loc33'];
    $Loc3Total = $_POST['Loc3Total3'];
    $query = "SELECT count(*) FROM `covidtracker` where Site='$site' and Status=\"Pending\"";
    //$query1 = '"SELECT count(*) FROM `covidtracker` where Site='$site' and Status=\"Done\" ";';
}
elseif(isset($_POST['Loc34']))
{   $flag=4;
    $site = $_POST['Loc34'];
    $Loc3Total = $_POST['Loc3Total4'];
    $query = "SELECT count(*) FROM `covidtracker`  where Site='$site' and Status=\"NA\"";
    //$query1 = '"SELECT count(*) FROM `covidtracker` where Site='$site' and Status=\"Done\" ";';
}
elseif(isset($_POST['Loc35']))
{   $flag=5;
    $site = $_POST['Loc35'];
    $Loc3Total = $_POST['Loc3Total5'];

    $query = "SELECT count(Distinct Aadharno) FROM `covidtracker` where site='$site'";
    
                    
}
elseif(isset($_POST['Loc36']))
{   $flag=6;
    $site = $_POST['Loc36'];
    $Loc3Total = $_POST['Loc3Total6'];
    //$query = "SELECT count(*) FROM `covidtracker` where Site='$site' and Status=\"Pending\"";
    //$query1 = '"SELECT count(*) FROM `covidtracker` where Site='$site' and Status=\"Done\" ";';
}
elseif(isset($_POST['Loc37']))
{   $flag=7;
    $site = $_POST['Loc37'];
    $Loc3Total = $_POST['Loc3Total7'];
   // $query = "SELECT count(*) FROM `covidtracker` where Site='$site' and Status=\"Pending\"";
    //$query1 = '"SELECT count(*) FROM `covidtracker` where Site='$site' and Status=\"Done\" ";';
}
elseif(isset($_POST['Loc38']))
{   $flag=8;
    $site = $_POST['Loc38'];
    $Loc3Total = $_POST['Loc3Total8'];
   // $query = "SELECT count(*) FROM `covidtracker` where Site='$site' and Status=\"Pending\"";
    //$query1 = '"SELECT count(*) FROM `covidtracker` where Site='$site' and Status=\"Done\" ";';
}


if($site!="")
{



/*

if(isset($_POST['Loc3']))
{
    $site = $_POST['Loc3'];
    $Loc3Total = $_POST['Loc3Total'];

    */
?>
 
<!-- Begin Page Content -->
<div class="container-fluid">


  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> 
        
        <?php 
    
    echo $Loc3Total; 
    echo ": ";
    echo $site;
    ?>
    
</h1>
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
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php 
    
    echo $Loc3Total; 

    ?></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
             
              <?php

            if($flag==6 || $flag==7 || $flag==8)
            {
               
                $query = "SELECT ID, empno, Aadharno,Date,Status,Result,Testcount, count(*) FROM `covidtracker` group by Aadharno";
                    $query_run = mysqli_query($connection, $query);
                
                    global $res1r;
                    global $res2r;
                    global $nope;
                    global $fitcount; $fitcount = 0;
                    global $unfitcount; $unfitcount = 0;;
                    global $na; $na =0;
                    $rowcount = mysqli_num_rows($query_run);
                    // echo $rowcount ;
          
                    

                  if(mysqli_num_rows($query_run) > 0)       
                  {
                      while($row = mysqli_fetch_assoc($query_run))
                      {
                       $aadharno = $row['Aadharno'];
                       $testcount= $row['count(*)']-1;

                       $res1= "SELECT * FROM covidtracker where Site='$site' and Aadharno = '$aadharno' and Testcount = $testcount ";
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
                         
                       $res2= "SELECT *  FROM `covidtracker` where site='$site' and Aadharno = '$aadharno' and Testcount = $testcount2 ";
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

                  if($flag==6)
                   { echo $fitcount;
                   }
                elseif($flag==7)
                   { echo $unfitcount;
                   }
                elseif($flag==8)
                   { echo $na;
                   }
                else
                  {

                  }
            }
            elseif($flag==27|| $flag==28 || $flag==29)
            {
               
                $query = "SELECT ID, empno, Aadharno,Date,Status,Result,Testcount, count(*) FROM `covidtracker` group by Aadharno";
                    $query_run = mysqli_query($connection, $query);
                
                    global $res1r;
                    global $res2r;
                    global $nope;
                    global $fitcount; $fitcount = 0;
                    global $unfitcount; $unfitcount = 0;;
                    global $na; $na =0;
                    $rowcount = mysqli_num_rows($query_run);
                    // echo $rowcount ;
          
                    

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

                  if($flag==27)
                   { echo $fitcount;
                   }
                elseif($flag==28)
                   { echo $unfitcount;
                   }
                elseif($flag==29)
                   { echo $na;
                   }
                else
                  {

                  }
            }
            else
            {
                
                $query_run = mysqli_query($connection, $query);

                if($query_run)
                 {
                  while ($fetch=mysqli_fetch_row($query_run))
                  {
                    printf("%s",$fetch[0]);
                  }
                  mysqli_free_result($query_run);
                 }

            }
            ?> 
               

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


            

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">
                    Below mentioned DataTable represents the number of registered employees those 
                    who have their COVID-19 Test today.
                    <br>
                    For more detail regarding enrollement & updation of below mentioned data, please visit the <a target="_blank"
                            href="http://localhost/covidtracker/admin/tables.php"> DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Datasheet</h6>
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                             <?php       
                               if($flag==5 ||  $flag==6 || $flag==7 || $flag==8 || $flag==26 ||  $flag==27 || $flag==28 || $flag==29)
                               { 
                                   ?>
                                <thead>
                                <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Aadharno</th>
                                        <th>Empno</th>
                                        <th>Testcount</th>
                                        <th>Stayloc</th>
                                        <th>Mobileno</th>
                                        <th>DOB</th>
                                 </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Aadharno</th>
                                        <th>Empno</th>
                                        <th>Testcount</th>
                                        <th>Stayloc</th>
                                        <th>Mobileno</th>
                                        <th>DOB</th>
                                 </tr>
                                </tfoot>
                           <?php
                               }
                               else
                               {
                                   ?>                               
                                <thead>
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
                                    </thead>
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

                                    <?php
                               }
                               ?>
                                    <tbody>
        <?php
                
                if($flag==22)
                {
                    $query = "select * from covidtracker";
                }
                elseif($flag==23)
                {
                  $query = "SELECT * FROM `covidtracker` where Status=\"Done\" ";
                }
                elseif($flag==24)
                {
                  $query = "SELECT * FROM `covidtracker` where Status=\"Pending\"";
                }
                elseif($flag==25)
                {
                  $query = "SELECT * FROM `covidtracker` where Status=\"NA\"";
                }
                elseif($flag==26)
                {
                  $query = "SELECT * FROM `covidtracker` group by Aadharno";
                }
                elseif($flag==27)
                {
                  $query = "SELECT ID, empno, Aadharno,Date,Status,Result,Testcount, count(*) FROM `covidtracker` group by Aadharno";
                    $query_run = mysqli_query($connection, $query);
                
                    global $res1r;
                    global $res2r;
                    global $nope;
                    global $fitcount; $fitcount = 0;
                    global $unfitcount; $unfitcount = 0;;
                    global $na; $na =0;
                    $rowcount = mysqli_num_rows($query_run);
                    // echo $rowcount ;
          
                    

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
                      
                      //   echo $res1;
                       //  echo $res2;

                         if ($res1r== "Negative" and $res2r == "Negative")
                           {
                            $res4= "SELECT *  FROM `covidtracker` where  Aadharno = '$aadhar1' group by '$aadhar1' ";
                       $query_run4 = mysqli_query($connection, $res4);

                       while($row = mysqli_fetch_assoc($query_run4))
                            {
                                $aadhar5 =$row['Aadharno'];
                                $res5= "SELECT *  FROM `covidtracker` where  Aadharno = '$aadhar5' ";
                                $query_run5 = mysqli_query($connection, $res5);
                                if($query_run5)
                                 {
                                 $rowcount= mysqli_num_rows($query_run5);
                                 $Testcountfull =  $rowcount;
                                 mysqli_free_result($query_run5);
                                 }
                             ?>
                             <tr> 
                                        <td><?php  echo $row['ID']; ?></td>
                                        <td><?php  echo $row['Name']; ?></td>
                                        <td><?php  echo $row['Aadharno']; ?></td>
                                        <td><?php  echo $row['Empno']; ?></td>
                                        <td><?php  echo $Testcountfull; ?></td>
                                        <td><?php  echo $row['Stayloc']; ?></td>
                                        <td><?php  echo $row['Mobileno']; ?></td>
                                        <td><?php  echo $row['DOB']; ?></td>
                    
                                </tr>
                <?php

                            }
                           }
                            
                               else
                               {
                               
                               }
                               
                      } 
                  }
                }
                elseif($flag==28)
                {
                  $query = "SELECT ID, empno, Aadharno,Date,Status,Result,Testcount, count(*) FROM `covidtracker` group by Aadharno";
                    $query_run = mysqli_query($connection, $query);
                
                    global $res1r;
                    global $res2r;
                    global $nope;
                    global $fitcount; $fitcount = 0;
                    global $unfitcount; $unfitcount = 0;;
                    global $na; $na =0;
                    $rowcount = mysqli_num_rows($query_run);
                    // echo $rowcount ;
          
                    

                  if(mysqli_num_rows($query_run) > 0)       
                  {
                      while($row = mysqli_fetch_assoc($query_run))
                      {
                       $aadharno = $row['Aadharno'];
                       $testcount= $row['count(*)']-1;
                       $res1= "SELECT * FROM covidtracker where Aadharno = '$aadharno' and Testcount = $testcount ";
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

                         if ($res1r== "Positive" or $res2r == "Positive")
                           {
                            $res4= "SELECT *  FROM `covidtracker` where  Aadharno = '$aadhar1' group by '$aadhar1' ";
                       $query_run4 = mysqli_query($connection, $res4);

                       while($row = mysqli_fetch_assoc($query_run4))
                            {
                                $aadhar5 =$row['Aadharno'];
                                        $res5= "SELECT *  FROM `covidtracker` where  Aadharno = '$aadhar5' ";
                                        $query_run5 = mysqli_query($connection, $res5);
                                        if($query_run5)
                                         {
                                         $rowcount= mysqli_num_rows($query_run5);
                                         $Testcountfull =  $rowcount;
                                         mysqli_free_result($query_run5);
                                         }

                             ?>
                             <tr> 
                                    <td><?php  echo $row['ID']; ?></td>
                                    <td><?php  echo $row['Name']; ?></td>
                                        <td><?php  echo $row['Aadharno']; ?></td>
                                        <td><?php  echo $row['Empno']; ?></td>
                                        <td><?php  echo $Testcountfull; ?></td>
                                        <td><?php  echo $row['Stayloc']; ?></td>
                                        <td><?php  echo $row['Mobileno']; ?></td>
                                        <td><?php  echo $row['DOB']; ?></td>
                    
                                </tr>
                <?php

                            }
                           }
                            
                               else
                               {
                                 
                               }
                               
                      } 
                  }
                }
                elseif($flag==29)
                {
                  $query = "SELECT ID, empno, Aadharno,Date,Status,Result,Testcount, count(*) FROM `covidtracker` group by Aadharno";
                  $query_run = mysqli_query($connection, $query);
              
                  global $res1r;
                  global $res2r;
                  global $nope;
                  global $fitcount; $fitcount = 0;
                  global $unfitcount; $unfitcount = 0;;
                  global $na; $na =0;
                  $rowcount = mysqli_num_rows($query_run);
                  // echo $rowcount ;
        
                  

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
                       $fitcount = $fitcount + 1;
                     }
                       elseif ($res1r== "Positive" or $res2r == "Positive") 
                       {
                         $unfitcount = $unfitcount + 1;
                       }
                       elseif ($res1r== "nope" or $res2r == "nope")
                         {
                          
                         }
                          
                             else
                             {
                              $res4= "SELECT *  FROM `covidtracker` where  Aadharno = '$aadhar1' group by '$aadhar1' ";
                              $query_run4 = mysqli_query($connection, $res4);
       
                              while($row = mysqli_fetch_assoc($query_run4))
                                   {
                                      $aadhar5 =$row['Aadharno'];
                                      $res5= "SELECT *  FROM `covidtracker` where  Aadharno = '$aadhar5' ";
                                      $query_run5 = mysqli_query($connection, $res5);
                                      if($query_run5)
                                       {
                                       $rowcount= mysqli_num_rows($query_run5);
                                       $Testcountfull =  $rowcount;
                                       mysqli_free_result($query_run5);
                                       }

                                    ?>
                                    <tr> 
                                      <td><?php  echo $row['ID']; ?></td>
                                      <td><?php  echo $row['Name']; ?></td>
                                      <td><?php  echo $row['Aadharno']; ?></td>
                                      <td><?php  echo $row['Empno']; ?></td>
                                      <td><?php  echo $Testcountfull; ?></td>
                                      <td><?php  echo $row['Stayloc']; ?></td>
                                      <td><?php  echo $row['Mobileno']; ?></td>
                                      <td><?php  echo $row['DOB']; ?></td>
                           
                                       </tr>
                       <?php
       
                                   }
                             }
                             
                    } 
                }
                }
                elseif($flag==1)
                {
                    $query = "select * from covidtracker where Site='$site'";
                }
                elseif($flag==2)
                {
                    $query = "SELECT * FROM `covidtracker` where Site='$site' and Status=\"Done\" ";

                }
                elseif($flag==3)
                {
                     $query = "SELECT * FROM `covidtracker` where Site='$site' and Status=\"Pending\"";
                }
                elseif($flag==4)
                {
                    $query  = "SELECT * FROM `covidtracker` where Site='$site' and Status=\"NA\"";
                }
                elseif($flag==5)
                {
                           

                     $query = "SELECT * FROM `covidtracker` where Site='$site' group by Aadharno";
                }
                elseif($flag==6)
                {
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
                       $res1= "SELECT * FROM covidtracker where Site='$site' and Aadharno = '$aadharno' and Testcount = $testcount ";
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
                         
                       $res2= "SELECT *  FROM `covidtracker` where site='$site' and Aadharno = '$aadharno' and Testcount = $testcount2 ";
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
                            $res4= "SELECT *  FROM `covidtracker` where  Aadharno = '$aadhar1' group by '$aadhar1' ";
                       $query_run4 = mysqli_query($connection, $res4);

                       while($row = mysqli_fetch_assoc($query_run4))
                            {
                                $aadhar5 =$row['Aadharno'];
                                $res5= "SELECT *  FROM `covidtracker` where  Aadharno = '$aadhar5' ";
                                $query_run5 = mysqli_query($connection, $res5);
                                if($query_run5)
                                 {
                                 $rowcount= mysqli_num_rows($query_run5);
                                 $Testcountfull =  $rowcount;
                                 mysqli_free_result($query_run5);
                                 }
                             ?>
                             <tr> 
                                        <td><?php  echo $row['ID']; ?></td>
                                        <td><?php  echo $row['Name']; ?></td>
                                        <td><?php  echo $row['Aadharno']; ?></td>
                                        <td><?php  echo $row['Empno']; ?></td>
                                        <td><?php  echo $Testcountfull; ?></td>
                                        <td><?php  echo $row['Stayloc']; ?></td>
                                        <td><?php  echo $row['Mobileno']; ?></td>
                                        <td><?php  echo $row['DOB']; ?></td>
                    
                                </tr>
                <?php

                            }
                           }
                            
                               else
                               {
                                 
                               }
                               
                      } 
                  }
                    
                }
               
                elseif($flag==7)
                {
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
                       $res1= "SELECT * FROM covidtracker where Site='$site' and Aadharno = '$aadharno' and Testcount = $testcount ";
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
                         
                       $res2= "SELECT *  FROM `covidtracker` where site='$site' and Aadharno = '$aadharno' and Testcount = $testcount2 ";
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
                         if ($res1r== "Positive" or $res2r == "Positive")
                           {
                            $res4= "SELECT *  FROM `covidtracker` where  Aadharno = '$aadhar1' group by '$aadhar1' ";
                       $query_run4 = mysqli_query($connection, $res4);

                       while($row = mysqli_fetch_assoc($query_run4))
                            {
                                $aadhar5 =$row['Aadharno'];
                                        $res5= "SELECT *  FROM `covidtracker` where  Aadharno = '$aadhar5' ";
                                        $query_run5 = mysqli_query($connection, $res5);
                                        if($query_run5)
                                         {
                                         $rowcount= mysqli_num_rows($query_run5);
                                         $Testcountfull =  $rowcount;
                                         mysqli_free_result($query_run5);
                                         }

                             ?>
                             <tr> 
                                    <td><?php  echo $row['ID']; ?></td>
                                    <td><?php  echo $row['Name']; ?></td>
                                        <td><?php  echo $row['Aadharno']; ?></td>
                                        <td><?php  echo $row['Empno']; ?></td>
                                        <td><?php  echo $Testcountfull; ?></td>
                                        <td><?php  echo $row['Stayloc']; ?></td>
                                        <td><?php  echo $row['Mobileno']; ?></td>
                                        <td><?php  echo $row['DOB']; ?></td>
                    
                                </tr>
                <?php

                            }
                           }
                            
                               else
                               {
                                 
                               }
                               
                      } 
                  }
                }
                elseif($flag==8)
                {
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
                       $res1= "SELECT * FROM covidtracker where Site='$site' and Aadharno = '$aadharno' and Testcount = $testcount ";
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
                         
                       $res2= "SELECT *  FROM `covidtracker` where site='$site' and Aadharno = '$aadharno' and Testcount = $testcount2 ";
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
                         $fitcount = $fitcount + 1;
                       }
                         elseif ($res1r== "Positive" or $res2r == "Positive") 
                         {
                           $unfitcount = $unfitcount + 1;
                         }
                         elseif ($res1r== "nope" or $res2r == "nope")
                           {
                            
                           }
                            
                               else
                               {
                                $res4= "SELECT *  FROM `covidtracker` where  Aadharno = '$aadhar1' group by '$aadhar1' ";
                                $query_run4 = mysqli_query($connection, $res4);
         
                                while($row = mysqli_fetch_assoc($query_run4))
                                     {
                                        $aadhar5 =$row['Aadharno'];
                                        $res5= "SELECT *  FROM `covidtracker` where  Aadharno = '$aadhar5' ";
                                        $query_run5 = mysqli_query($connection, $res5);
                                        if($query_run5)
                                         {
                                         $rowcount= mysqli_num_rows($query_run5);
                                         $Testcountfull =  $rowcount;
                                         mysqli_free_result($query_run5);
                                         }

                                      ?>
                                      <tr> 
                                        <td><?php  echo $row['ID']; ?></td>
                                        <td><?php  echo $row['Name']; ?></td>
                                        <td><?php  echo $row['Aadharno']; ?></td>
                                        <td><?php  echo $row['Empno']; ?></td>
                                        <td><?php  echo $Testcountfull; ?></td>
                                        <td><?php  echo $row['Stayloc']; ?></td>
                                        <td><?php  echo $row['Mobileno']; ?></td>
                                        <td><?php  echo $row['DOB']; ?></td>
                             
                                         </tr>
                         <?php
         
                                     }
                               }
                               
                      } 
                  }
                }
                 if($flag==6 || $flag==7 || $flag==8 ||  $flag==27 || $flag==28 || $flag==29)
                 {
                 
                    }
                    elseif($flag==5)
                    {
                        $query_run = mysqli_query($connection, $query);

                       

                        

                        if(mysqli_num_rows($query_run) > 0)        
                              {
                                  while($row = mysqli_fetch_assoc($query_run))
                                  {
                            
                                    $aadhar5 =$row['Aadharno'];
                                    $res5= "SELECT *  FROM `covidtracker` where  Aadharno = '$aadhar5' ";
                                    $query_run5 = mysqli_query($connection, $res5);
                                    if($query_run5)
                                     {
                                     $rowcount= mysqli_num_rows($query_run5);
                                     $Testcountfull =  $rowcount;
                                     mysqli_free_result($query_run5);
                                     }
              ?>
                               <tr>
                                      <td><?php  echo $row['ID']; ?></td>
                                      <td><?php  echo $row['Name']; ?></td>
                                      <td><?php  echo $row['Aadharno']; ?></td>
                                      <td><?php  echo $row['Empno']; ?></td>
                                      <td><?php  echo $Testcountfull; ?></td>
                                      <td><?php  echo $row['Stayloc']; ?></td>
                                      <td><?php  echo $row['Mobileno']; ?></td>
                                      <td><?php  echo $row['DOB']; ?></td>
                      
                                  </tr>
                  <?php
                                  } 
                              }
                              else 
                              {
                                  echo "No Record Found1";
                              }
                    }
                    else
                    {
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
                              else 
                              {
                                  echo "No Record Found1";
                              }

                    }
                    
                    
                    }else 
                    {
                        echo "No Record Found2";
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