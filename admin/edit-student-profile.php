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
  $regid=intval($_GET['id']);
$studentname=$_POST['studentname'];
$photo=$_FILES["photo"]["name"];


$cgpa1=$_POST['cgpa1'];
$cgpa2=$_POST['cgpa2'];
$cgpa3=$_POST['cgpa3'];
$cgpa4=$_POST['cgpa4'];
$cgpa5=$_POST['cgpa5'];
$cgpa6=$_POST['cgpa6'];
$cgpa7=$_POST['cgpa7'];
$cgpa8=$_POST['cgpa8'];

move_uploaded_file($_FILES["photo"]["tmp_name"],"studentphoto/".$_FILES["photo"]["name"]);
$ret=mysqli_query($con,"update students set studentName='$studentname',studentPhoto='$photo',cgpa1='$cgpa1',cgpa2='$cgpa2',cgpa3='$cgpa3',cgpa4='$cgpa4',cgpa5='$cgpa5',cgpa6='$cgpa6',cgpa7='$cgpa7',cgpa8='$cgpa8'  where StudentRegno='$regid'");
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
<?php if($_SESSION['alogin']!="")
{
 include('includes/menubar.php');
}
 ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-weight: 900;border-bottom: 2px solid #000000; padding-bottom: 20px;">Student's Profile  </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          Student Registration
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
<?php 
$regid=intval($_GET['id']);

$sql=mysqli_query($con,"select * from students where StudentRegno='$regid'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>

                        <div class="panel-body">
                       <form name="dept" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label for="studentphoto">Student Photo  </label>
   <?php if($row['studentPhoto']==""){ ?>
   <img src="../studentphoto/noimage.png" width="200" height="200"><?php } else {?>
   <img src="../studentphoto/<?php echo htmlentities($row['studentPhoto']);?>" width="200" height="200">
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
    <label for="Pincode">Pincode  </label>
    <input type="text" class="form-control" id="Pincode" name="Pincode" readonly value="<?php echo htmlentities($row['pincode']);?>" required />
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
    <label for="Pincode">Pincode  </label>
    <input type="text" class="form-control" id="Pincode" name="Pincode" readonly value="<?php echo htmlentities($row['pincode']);?>" required />
  </div>   

<div class="form-group">
    <label for="CGPA1">1st Semester CGPA  </label>
    <input type="text" class="form-control" id="cgpa1" name="cgpa1"  value="<?php echo htmlentities($row['cgpa1']);?>"/>
  </div>  
<div class="form-group">
    <label for="CGPA2">2nd Semester CGPA  </label>
    <input type="text" class="form-control" id="cgpa2" name="cgpa2"  value="<?php echo htmlentities($row['cgpa2']);?>" />
  </div>
<div class="form-group">
    <label for="CGPA3">3rd Semester CGPA  </label>
    <input type="text" class="form-control" id="cgpa3" name="cgpa3"  value="<?php echo htmlentities($row['cgpa3']);?>" />
  </div>
<div class="form-group">
    <label for="CGPA4">4th Semester CGPA  </label>
    <input type="text" class="form-control" id="cgpa4" name="cgpa4"  value="<?php echo htmlentities($row['cgpa4']);?>" />
  </div>

<div class="form-group">
    <label for="CGPA5">5th Semester CGPA  </label>
    <input type="text" class="form-control" id="cgpa5" name="cgpa5"  value="<?php echo htmlentities($row['cgpa5']);?>" />
  </div>
<div class="form-group">
    <label for="CGPA6">6th Semester CGPA  </label>
    <input type="text" class="form-control" id="cgpa6" name="cgpa6"  value="<?php echo htmlentities($row['cgpa6']);?>" />
  </div>
<div class="form-group">
    <label for="CGPA7">7th Semester CGPA  </label>
    <input type="text" class="form-control" id="cgpa7" name="cgpa7"  value="<?php echo htmlentities($row['cgpa7']);?>" />
  </div>
<div class="form-group">
    <label for="CGPA8">8th Semester CGPA </label>
    <input type="text" class="form-control" id="cgpa8" name="cgpa8"  value="<?php echo htmlentities($row['cgpa8']);?>" />
  </div>

<div class="form-group">
    <a href="edit-PerHistory.php">
    <button class="btn btn-primary"><i class="fa fa-edit "></i> View Enroll History</button> </a>
</div>


  <?php } ?>

</form>
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
