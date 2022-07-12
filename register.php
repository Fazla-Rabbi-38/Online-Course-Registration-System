<?php
include('includes/config.php');


if(isset($_POST['submit']))
{
$studentname=$_POST['studentname'];
$studentregno=$_POST['studentregno'];
$rollNo=$_POST['rollNo'];
$department=$_POST['department'];
$password=md5($_POST['password']);
$pincode =$_POST['pincode'];
$photo=$_FILES["photo"]["name"];
move_uploaded_file($_FILES["photo"]["tmp_name"],"studentphoto/".$_FILES["photo"]["name"]);
$ret=mysqli_query($con,"insert into students(studentName,StudentRegno,rollNo,department,password,pincode,studentPhoto) values('$studentname','$studentregno','$rollNo','$department','$password','$pincode','$photo')");
if($ret)
{
$success="Student Registered Successfully !!";
}
else
{
  $error="Error : Student  not Registered";
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
    <title>Student | Student Registration</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
<?php include('includes/header.php');?>
    <!-- LOGO HEADER END-->

    <!-- MENU SECTION END-->
                <?php
            if (isset($success)) {
                ?>
  
                 <font size="14px" color="green" align="center"><?= $success ?></font> <?php } ?>
            <?php
            if (isset($error)) {
                ?>
  
                 <font size="14px" color="red" align="center"><?= $error ?></font> <?php } ?>
                 
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Student Registration  </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="page-head-line">
                          Student Registration
                        </div>


  
                        <div class="panel-body">
                       <form name="dept" method="post" enctype="multipart/form-data">
   <div class="form-group">
    <label for="studentname">Student Name  </label>
    <input type="text" class="form-control" id="studentname" name="studentname" placeholder="Student Name" required />
  </div>

 <div class="form-group">
    <label for="studentregno">Student Reg No   </label>
    <input type="text" class="form-control" id="studentregno" name="studentregno" onBlur="userAvailability()" placeholder="Student Reg no" required />
     <span id="user-availability-status1" style="font-size:12px;"></span>
</div>
<div class="form-group">
    <label for="rollNo">Roll No   </label>
    <input type="text" class="form-control" id="rollNo" name="rollNo" onBlur="userAvailability()" placeholder=" Roll No" required />
</div>

<div class="form-group">
    <label for="department">Department  </label>
    <input type="text" class="form-control" id="department" name="department" onBlur="userAvailability()" placeholder=" Department" required />
</div>

<div class="form-group">
    <label for="password">Password  </label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required />
  </div> 
  <div class="form-group">
    <label for="pincode">Pincode  </label>
    <input type="pincode" class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode" required />
  </div>   
  <div class="form-group">
    <label for="studentPhoto">studentPhoto  </label>
    <input type="file" name="photo" placeholder="Upload Your Photo" value="" />
  </div> 
 <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
</form>
                            </div>
                            </div>
                    </div>
                  
                </div>

       <div align="center">     
     <h4 align="center"><b><font >Already Registerd? Sign In... </font></b></h4>
          <a href="index.php" target="_blank">
<button class="btn btn-primary" ><i class="fa fa-user "></i> Sign In</button> </a>
</div>
       </div>
     </div>

    
  <?php include('includes/footer.php');?>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>


</body>
</html>

