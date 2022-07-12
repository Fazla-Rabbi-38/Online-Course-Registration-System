<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0 or strlen($_SESSION['pcode'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$studentregno=$_POST['rollNo'];

}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sem6</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    
</head>

<body>
<?php include('includes/header.php');?>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['login']!="")
{
 include('includes/menubar.php');
}
 ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Course Enrollment For First Semester</h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          Course Enrollment Details
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
<?php $sql=mysqli_query($con,"select * from students where StudentRegno='".$_SESSION['login']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>

<div class="panel-body">
   <form method="post" action="enrollDetails.php">
   <div class="form-group">
    <label for="StudentRegno">Reg No  </label>
    <input type="text" class="form-control" id="StudentRegno" name="StudentRegno" value="<?php echo htmlentities($row['StudentRegno']);?>"  />
  </div>
     <div class="form-group">
    <label for="studentname">Student Name  </label>
    <input type="text" class="form-control" id="studentname" name="studentname" value="<?php echo htmlentities($row['studentName']);?>"  />
  </div>
 <div class="form-group">
    <label for="Roll NO">Roll NO   </label>
    <input type="text" class="form-control" name="rollNo" value="<?php echo htmlentities($row['rollNo']);?>" >
  </div>
  <div class="form-group">
    <label for="Department">Department   </label>
    <input type="text" class="form-control" name="department" value="<?php echo htmlentities($row['department']);?>" >
  </div>
    <div><h4>Select Courses You Want To Enroll</h4></div>
    
    <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 3200 Software Development Project II(Credit-0.75)" />
                           CSE 3200 Software Development Project II(Credit-0.75)

                </div>
            </div>
          </div>
        </div>
      </div>
        <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 3201 Operating System(Credit-3.0)" /> 
                          CSE 3201 Operating System(Credit-3.0)
s
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
          <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 3202 Sessional Based on CSE 3201(Credit-0.75)" /> CSE 3202 Sessional Based on CSE 3201(Credit-0.75)
                        </div>
            </div>
          </div>
        </div>
      </div>

            <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 3203

Computer Architecture
and Design(Credit-3.0)" />CSE 3203

Computer Architecture
and Design(Credit-3.0)
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
             <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 3205 Computer Networks(Credit-3.0)" />CSE 3205 Computer Networks(Credit-3.0)
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
            
            <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 3206 Sessional Based on
CSE 3205(Credit-1.5)"/>
                          CSE 3206 Sessional Based on
CSE 3205(Credit-1.5)
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 3207 Peripherals &
Interfacings(Credit-3.0)"/>CSE 3207 Peripherals &
Interfacings(Credit-3.0)

                        </div>
                      </div>
                    </div>
                  </div>
            </div>
             <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="Sessional Based on
CSE 3207(Credit-0.75)"/>
                          Sessional Based on
CSE 3207(Credit-0.75)
                        </div>
                      </div>
                    </div>
                  </div>
            
        </div>
            
              <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 3209 Artificial Intelligence(Credit-3.0)"/>
                          CSE 3209 Artificial Intelligence(Credit-3.0)
                        </div>
                       </div>
                     </div>
                   </div>
                  </div>

                  <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 3210 Sessional Based on
CSE 3209(Credit-1.5)"/>
                          CSE 3210 Sessional Based on
CSE 3209(Credit-1.5)
                        </div>
                       </div>
                     </div>
                   </div>
                  </div>
                   <p><input type="submit" name="submit" class="btn btn-info" value="Submit" /></p>
          </form>

</div>
  <?php } ?>
  
        
    <!-- CONTENT-WRAPPER SECTION END-->
    
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
