<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0 or strlen($_SESSION['pcode'])==0)
    {   
header('location:index.php');
}
else{

$language = $_POST['language'] ;
$rollNo= $_POST['rollNo'] ;
$StudentRegno=$_POST['StudentRegno'] ;
$studentname=$_POST['studentname'] ;
$department=$_POST['department'] ;


if (isset($_POST["submit"]))  
{  
for ($i=0; $i<sizeof ($language);$i++) {  
$query = "INSERT INTO courseenrolls (StudentRegno,roll,studentname,department,course) VALUES ('$StudentRegno','$rollNo','$studentname','$department','".$language[$i]."')";  
  

mysqli_query($con,$query);

  
}    
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
    <title>EnrollDetails</title>
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
               
               <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Course Enrollment Paper </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4>Course Enrollment Details</h4>
                        </div>

                <div class="panel-body">
                       <form method="post" action="<?=$_SERVER['PHP_SELF'] ?>">
   <div class="form-group">
    <label for="studentname">Student Name  </label>
    <input style="font-size:11px;font-weight: 400;" type="text" class="form-control" id="studentname" name="studentname" value="<?php echo htmlentities ( $studentname );?>"  />
  </div>
  <div class="form-group">
    <label for="StudentRegno">Reg No  </label>
    <input style="font-size:11px;font-weight: 400;" type="text" class="form-control" id="StudentRegno" name="StudentRegno" value="<?php echo htmlentities ( $StudentRegno );?>"  />
  </div>

  <div class="form-group">
    <label for="rollNo">Roll NO  </label>
    <input style="font-size:11px;font-weight: 400;" type="text" class="form-control" id="rollNo" name="rollNo" value="<?php echo htmlentities ( $rollNo );?>"  />
  </div>

  <div class="form-group">
    <label for="department">Department </label>
    <input style="font-size:11px;font-weight: 400;" type="text" class="form-control" id="department" name="department" value="<?php echo htmlentities ( $department );?>"  />
  </div>

          <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                            
                                            
                                                
                                             <th align="center">Courses Selected</th>
                                             
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$sql=mysqli_query($con,"SELECT course FROM courseenrolls where roll=$rollNo");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            
                                            <td><?php echo htmlentities($row['course']);?></td>
                                          
                                            
                                            
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
                              </div>
<h3>Your Request is Proceed To The Course Advisor.Wait For The Confirmation</h3>
<h4>You Have To Pay BDT. <?php echo htmlentities($cnt*100);?> For Selecting This <?php echo htmlentities($cnt);?> Courses after getting Confirmation</h4>

<a href="print.php" target="_blank">
<button class="btn btn-primary"><i class="fa fa-print "></i> Print</button> </a>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

  
        
    <!-- CONTENT-WRAPPER SECTION END-->
    
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
