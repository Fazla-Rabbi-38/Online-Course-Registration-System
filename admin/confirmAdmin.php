<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['alogin'])==0)
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
<?php if($_SESSION['alogin']!="")
{
 include('includes/menubar.php');
}
 ?>
<h1 style="font-size: 20px;font-weight: 800;" align="center">Your Request is Procced To Head Sir</h1>
  <?php
          if(isset($_POST["submit"]))
          {
           $for_query = '';
           $for_query1 = '';
           $for_query2 = '';
           $for_query3 = '';
           $for_query4 = '';
           $count=0;
           if(!empty($_POST["language"]))
           {
            foreach($_POST["StudentRegno"] as $language4)
            {
             $for_query4 .= $language4 . ', ';
            }
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
            $for_query4 = substr($for_query4, 0, -2);
            $query = "INSERT INTO courseenrollsconfirm (StudentRegno,roll,studentname,department,course) VALUES ('$for_query4','$for_query1','$for_query2','$for_query3','$for_query')";
            
            if(mysqli_query($con,$query))
            {
               ?>
               
               <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-weight: 900;border-bottom: 2px solid #000000; padding-bottom: 20px;">Course Enrollment Paper </h1>
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
                       <form method="post" action="">
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
