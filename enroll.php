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
$studentname=$_POST['studentname'];
$studentregno=$_POST['studentregno'];
$pincode=$_POST['Pincode'];
$session=$_POST['session'];
$dept=$_POST['department'];
$level=$_POST['level'];
$course=$_POST['course'];
$sem=$_POST['sem'];

$ret=mysqli_query($con,"SELECT * FROM semester WHERE semester ='$_POST[sem]';");
if ($sem=="First" && $dept=="CSE") {
        header('location:sem1.php');
      }
if ($sem=="Second" && $dept=="CSE" ) {
        header('location:sem2.php');
      }
if ($sem=="Third" && $dept=="CSE") {
        header('location:sem3.php');
      }
if ($sem=="Fourth" && $dept=="CSE") {
        header('location:sem4.php');
      }
if ($sem=="Fifth" && $dept=="CSE") {
        header('location:sem5.php');
      }
if ($sem=="Sixth" && $dept=="CSE") {
        header('location:sem6.php');
      }
if ($sem=="Seventh" && $dept=="CSE") {
        header('location:sem7.php');
      }
if ($sem=="Eighth" && $dept=="CSE") {
        header('location:sem8.php');
      }
if ($sem=="First" && $dept=="EEE") {
        header('location:sem1EEE.php');
      }
if ($sem=="Second" && $dept=="EEE") {
        header('location:sem2EEE.php');
      }
if ($sem=="Third" && $dept=="EEE") {
        header('location:sem3EEE.php');
      }
if ($sem=="Fourth" && $dept=="EEE") {
        header('location:sem4EEE.php');
      }
if ($sem=="Fifth" && $dept=="EEE") {
        header('location:sem5EEE.php');
      }
if ($sem=="Sixth" && $dept=="EEE") {
        header('location:sem6EEE.php');
      }
if ($sem=="Seventh" && $dept=="EEE") {
        header('location:sem7EEE.php');
      }
if ($sem=="Eighth" && $dept=="EEE") {
        header('location:sem8EEE.php');
      }
if ($sem=="First" && $dept=="ME") {
        header('location:sem1ME.php');
      }
if ($sem=="Second" && $dept=="ME") {
        header('location:sem2ME.php');
      }
if ($sem=="Third" && $dept=="ME") {
        header('location:sem3ME.php');
      }
if ($sem=="Fourth" && $dept=="ME") {
        header('location:sem4ME.php');
      }
if ($sem=="Fifth" && $dept=="ME") {
        header('location:sem5ME.php');
      }
if ($sem=="Sixth" && $dept=="ME") {
        header('location:sem6ME.php');
      }
if ($sem=="Seventh" && $dept=="ME") {
        header('location:sem7ME.php');
      }
if ($sem=="Eighth" && $dept=="ME") {
        header('location:sem8ME.php');
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
    <title>Course Enroll</title>
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
    <form action="" method="post">
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Course Enroll </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          Course Enroll
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
<?php $sql=mysqli_query($con,"select * from students where StudentRegno='".$_SESSION['login']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>

                        <div class="panel-body">
                       <form name="dept" method="post" enctype="multipart/form-data" action="<?=$_SERVER['PHP_SELF'] ?>">
   <div class="form-group">
    
   <?php if($row['studentPhoto']==""){ ?>
   <img src="studentphoto/noimage.png" width="200" height="200"><?php } else {?>
   <img src="studentphoto/<?php echo htmlentities($row['studentPhoto']);?>" width="200" height="200">
   <?php } ?>
  </div>
 <?php } ?>


  



<div class="form-group">
    <label for="Session">Session  </label>
    <select class="form-control" name="session" required>
   <option selected="" disabled="">Select Session</option>   
   <?php 
$sql=mysqli_query($con,"select * from session");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['session']);?></option>
<?php } ?>

    </select> 
  </div> 



<div class="form-group">
    <label for="Department">Department  </label>
    <select class="form-control" name="department" required>
   <option selected="" disabled="">Select Depertment</option>   
   <?php 
$sql=mysqli_query($con,"select * from department");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['department']);?>"><?php echo htmlentities($row['department']);?></option>
<?php } ?>

    </select> 
  </div> 



<div class="form-group">
    <label for="Semester">Semester  </label>
    <select class="form-control" name="sem" required>
    <option selected="" disabled="">Select Semester</option> 
   <?php 
$sql=mysqli_query($con,"select * from semester");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['semester']);?>"><?php echo htmlentities($row['semester']);?></option>

<?php } ?>


     </select> 
</div>






 <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
</form>
                            </div>
                            </div>
                    </div>
                  
                </div>

            </div>





        </div>
    </form>
  <?php include('includes/footer.php');?>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>


</body>
</html>

