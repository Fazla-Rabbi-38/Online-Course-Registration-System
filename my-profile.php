<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$studentname=$_POST['studentname'];
$photo=$_FILES["photo"]["name"];
$session=$_POST['session'];
$department=$_POST['department'];
$semester=$_POST['semester'];
$cgpa1=$_POST['cgpa2'];
$cgpa2=$_POST['cgpa1'];
$cgpa3=$_POST['cgpa3'];
$cgpa4=$_POST['cgpa4'];
$cgpa5=$_POST['cgpa5'];
$cgpa6=$_POST['cgpa6'];
$cgpa7=$_POST['cgpa7'];
$cgpa8=$_POST['cgpa8'];



move_uploaded_file($_FILES["photo"]["tmp_name"],"studentphoto/".$_FILES["photo"]["name"]);
$ret=mysqli_query($con,"update students set studentName='$studentname',studentPhoto='$photo' where StudentRegno='".$_SESSION['login']."'");
if($ret)
{
$_SESSION['msg']="Student Record updated Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Student Record not update";
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
    <title>Student Profile</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
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
   <h3 align="center"> <font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font></h3>
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Student's Profile  </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          Student Profile
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
<?php $sql=mysqli_query($con,"select * from students where StudentRegno='".$_SESSION['login']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>

                        <div class="panel-body">
                       <form name="dept" method="post" enctype="multipart/form-data">

   <div class="form-group">
    <label for="studentPhoto">Student Photo</label>
   <?php if($row['studentPhoto']==""){ ?>
   <img src="studentphoto/noimage.png" width="200" height="200"><?php } else {?>
   <img src="studentphoto/<?php echo htmlentities($row['studentPhoto']);?>" width="200" height="200">
   <?php } ?>
  </div>
   <div class="form-group">
    <label for="studentname">Student Name  </label>
    <input type="text" class="form-control" id="studentname" name="studentname" value="<?php echo htmlentities($row['studentName']);?>"  />
  </div>

 <div class="form-group">
    <label for="studentregno">Student Reg No   </label>
    <input type="text" class="form-control" id="studentregno" name="studentregno" value="<?php echo htmlentities($row['StudentRegno']);?>"  placeholder="Student Reg no" readonly />
    
  </div>

<div class="form-group">
    <label for="rollNo">Roll No  </label>
    <input type="text" class="form-control" id="Roll No" name="Roll No" readonly value="<?php echo htmlentities($row['rollNo']);?>" required />
  </div>   
<div class="form-group">
    <label for="session">Session  </label>
    <input type="text" class="form-control" id="Session" name="Session" readonly value="<?php echo htmlentities($row['session']);?>" required />
  </div> 

<div class="form-group">
    <label for="department">Department  </label>
    <input type="text" class="form-control" id="Department" name="Department" value="<?php echo htmlentities($row['department']);?>" required />
  </div>   
  



<div class="form-group">
    <label for="Pincode">Upload New Photo  </label>
    <input type="file" class="form-control" id="photo" name="photo"  value="<?php echo htmlentities($row['studentPhoto']);?>" />
  </div>


  <?php } ?>

 <button type="submit" name="submit" id="submit" class="btn btn-default">Update</button>
</form>
                            </div>
                            </div>
                    </div>
                  
                </div>

            </div>

<div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Student's Results  </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          Student Results
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
<?php $sql=mysqli_query($con,"select * from students where StudentRegno='".$_SESSION['login']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>

                        <div class="panel-body">
                       <form name="dept" method="post" enctype="multipart/form-data">
     <div class="form-group">
      <h2>Currently You Are in <?php echo htmlentities($row['semester']);?> Semester </h2>
    <label for="CGPA1">CGPA Of 1st semester </label>
    <input type="text" class="form-control" id="cgpa1" name="cgpa1" readonly value="<?php echo htmlentities($row['cgpa1']);?>" required />
  </div>  
    <div class="form-group">
    <label for="CGPA2">CGPA Of 2nd semester </label>
    <input type="text" class="form-control" id="cgpa2" name="cgpa2" readonly value="<?php echo htmlentities($row['cgpa2']);?>" required />
  </div>  
  <div class="form-group">
    <label for="CGPA3">CGPA Of 3rd semester </label>
    <input type="text" class="form-control" id="cgpa3" name="cgpa3" readonly value="<?php echo htmlentities($row['cgpa3']);?>" required />
  </div>  
  <div class="form-group">
    <label for="CGPA4">CGPA Of 4th semester </label>
    <input type="text" class="form-control" id="cgpa4" name="cgpa4" readonly value="<?php echo htmlentities($row['cgpa4']);?>" required />
  </div>  
<div class="form-group">
    <label for="CGPA5">CGPA Of 5th semester </label>
    <input type="text" class="form-control" id="cgpa5" name="cgpa5" readonly value="<?php echo htmlentities($row['cgpa5']);?>" required />
  </div>  
  <div class="form-group">
    <label for="CGPA6">CGPA Of 6th semester </label>
    <input type="text" class="form-control" id="cgpa6" name="cgpa6" readonly value="<?php echo htmlentities($row['cgpa6']);?>" required />
  </div>  
  <div class="form-group">
    <label for="CGPA7">CGPA Of 7th semester </label>
    <input type="text" class="form-control" id="cgpa7" name="cgpa7" readonly value="<?php echo htmlentities($row['cgpa7']);?>" required />
  </div>  
  <div class="form-group">
    <label for="CGPA8">CGPA Of 8th semester </label>
    <input type="text" class="form-control" id="cgpa8" name="cgpa8" readonly value="<?php echo htmlentities($row['cgpa8']);?>" required />
  </div>  
  <?php } ?>

  </div>
                            </div>
                    </div>
                  
                </div>

            </div>


        </div>
    </div>
  <?php include('includes/footer.php');?>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>


</body>
</html>
<?php } ?>
