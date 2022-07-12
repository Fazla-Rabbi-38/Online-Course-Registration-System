<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else
{

if(isset($_POST['submit']))
{


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
$sql=mysqli_query($con,"select * from courseenrolls where StudentRegno='$regid'");
$sql1=mysqli_query($con,"select * from courseenrolls where StudentRegno='$regid'");
$row=mysqli_fetch_array($sql);
?>

                        <div class="panel-body">
                       <form method="post" action="proceed-head.php">
   <div class="form-group">
    <label for="studentname">Student Name  </label>
    <input type="text" class="form-control" id="studentname" name="studentname" value="<?php echo htmlentities($row['studentname']);?>"  />
  </div>

 <div class="form-group">
    <label for="studentregno">Student Reg No </label>
    <input type="text" class="form-control" id="StudentRegno" name="StudentRegno" value="<?php echo htmlentities($regid);?>"  placeholder="Student Reg no" readonly />
    
  </div>
  <div class="form-group">
    <label for="rollNo">Roll No </label>
    <input type="text" class="form-control" id="rollNo" name="rollNo" value="<?php echo htmlentities($row['roll']);?>"  placeholder="Roll No" readonly />
    
  </div>

  <div class="form-group">
    <label for="department">Department</label>
    <input type="text" class="form-control" id="department" name="department" value="<?php echo htmlentities($row['department']);?>"  placeholder="Department" readonly />
    
  </div>
<?php
$cnt=1;
while($row1=mysqli_fetch_array($sql1))
{
?>
    <div class="form-group">
    <input style="font-size:11px;font-weight: 400;" type="checkbox" name="language[]" value="<?php echo htmlentities($row1['course']);?>" /><?php echo htmlentities($row1['course']); ?>
    </div>
    
<?php 
$cnt++;
} ?>
                                                            


<div class="form-group">
    <input type="submit" name="submit" class="btn btn-primary" value="Proceed To Head" /></p>
</div>

</form>
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
