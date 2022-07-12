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
    <title>Sem1</title>
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
    <label for="studentname">Student Name  </label>
    <input type="text" class="form-control" id="studentname" name="studentname[]" value="<?php echo htmlentities($row['studentName']);?>"  />
  </div>

 <div class="form-group">
    <label for="Roll NO">Roll NO   </label>
    <input type="text" class="form-control" name="rollNo[]" value="<?php echo htmlentities($row['rollNo']);?>" >
  <div class="form-group">
    <label for="Department">Department   </label>
    <input type="text" class="form-control" name="department[]" value="<?php echo htmlentities($row['department']);?>" >
    <h4>Select Courses You Want To Enroll</h4>
    <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 1100-Computer Fundamentals" /> CSE 1100-Computer Fundamentals
                </div>
            </div>
        <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 1101-C programming" /> CSE 1101-C programming
                        </div>
          </div>
          <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 1102-Sessional Based On CSE 1101" /> CSE 1102-Sessional Based On CSE 1101
                        </div>
            </div>

            <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="EEE 1101-Electrical Circuits I" /> EEE 1101-Electrical Circuits I
                        </div>
            </div>
             <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="EEE 1102-Sessional Based On EEE 1101" />Sessional Based On EEE 1151
                        </div>
            </div>
            
            <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="HUM 1113-Basic English"/>HUM 1113-Basic English
                        </div>
            </div>
            <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="HUM 1114-Sessional Based On HUM 1113"/>HUM 1114-Sessional Based On HUM 1113
                        </div>
            </div>
            </div>
             <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="EEE 1151-Electrical Engineering"/>EEE 1151-Electrical Engineering
                        </div>
            
        </div>
            <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="EEE 1152-Sessional Based On EEE 1151"/>EEE 1152-Sessional Based On EEE 1151
                        </div>
                    
                  </div>
                  <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CHE 1113- Inorganic Chemistry"/>CHE 1113-Inorganic Chemistry
                        </div>
                    
                  </div>
                   <p><input type="submit" name="submit" class="btn btn-primary" value="Submit" /></p>
          </form>


  <?php } ?>
  <?php
          if(isset($_POST["submit"]))
          {
           $for_query = '';
           $for_query1 = '';
           $for_query2 = '';
           $for_query3 = '';
           $count=0;
           if(!empty($_POST["language"]))
           {
            foreach($_POST["rollNo"] as $language1)
            {
             $for_query1 .= $language1 . ', ';
            }
            foreach($_POST["studentname"] as $language2)
            {
             $for_query2 .= $language2 . ', ';
            }
            foreach($_POST["department"] as $language3)
            {
             $for_query3 .= $language3 . ', ';
            }
            foreach($_POST["language"] as $language)
            {
             $for_query .= $language . ', ';
             $count+=100;
            }
            
            $for_query = substr($for_query, 0, -2);
            $for_query1 = substr($for_query1, 0, -2);
            $for_query2 = substr($for_query2, 0, -2);
             $for_query3 = substr($for_query3, 0, -2);
            $query = "INSERT INTO courseenrolls (roll,studentname,department,course) VALUES ('$for_query1','$for_query2','$for_query3','$for_query')";
            
            if(mysqli_query($con,$query))
            {
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
                          Course Enrollment Details
                        </div>

                <div class="panel-body">
                       <form method="post" action="<?=$_SERVER['PHP_SELF'] ?>">
   <div class="form-group">
    <label for="studentname">Student Name  </label>
    <input type="text" class="form-control" id="studentname" name="studentname[]" value="<?php echo htmlentities ( $for_query2 );?>"  />
  </div>

  <div class="form-group">
    <label for="rollNo">Roll NO  </label>
    <input type="text" class="form-control" id="rollNo" name="rollNo[]" value="<?php echo htmlentities ( $for_query1 );?>"  />
  </div>

  <div class="form-group">
    <label for="department">Department </label>
    <input type="text" class="form-control" id="department" name="department[]" value="<?php echo htmlentities ( $for_query3 );?>"  />
  </div>

  <div class="form-group">
    <label for="course">Courses Selected </label>
    <input type="text" class="form-control" id="course" name="course[]" value="<?php echo htmlentities ( $for_query );?>"  />
  </div>

<h4>You Have To Pay BDT. <?php echo htmlentities($count);?> For Selecting This <?php echo htmlentities($count/100);?> Courses</h4>

<a href="print.php" target="_blank">
<button class="btn btn-primary"><i class="fa fa-print "></i> Print</button> </a>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

  <?php
            
            }
           }
           else
           {
            echo "<label class='text-danger'>* Please Select Atleast one Course</label>";
           }
          }
          ?>
        
    <!-- CONTENT-WRAPPER SECTION END-->
    
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
