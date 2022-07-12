<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{



?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Requests For permission</title>
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
                        <h1 style="font-weight: 900;border-bottom: 2px solid #000000; padding-bottom: 20px;"> Requests For Registration Permission </h1>
                    </div>
                </div>
                <div class="row" >
            
                <div class="col-md-12">
                    <!--    Bordered Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Requests For permission
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                                
                                            <th>#</th>
                                            <th>Roll No  </th>
                                            <th>Student Name</th>
                                            
                                            <th>Department</th>
                                            <th>Action</th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$sql=mysqli_query($con,"select DISTINCT roll,studentname,department,StudentRegno from courseenrollsconfirm");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            
                                            <td><?php echo htmlentities($row['roll']);?></td>
                                            <td><b><?php echo htmlentities($row['studentname']);?></b></td>
                                            <td><?php echo htmlentities($row['department']);?></td>

                                            <td><a href="edit-student-profile.php?id=<?php echo $row['StudentRegno']?>">
<button class="btn btn-info"> Check Profile </button> </a>
                                               <a href="studentRequest.php?id=<?php echo $row['StudentRegno']?>">  <button class="btn btn-primary"><i class="fa fa-check "></i> Check Courses Requested</button>
                                               <a href="enroll-history.php?id=<?php echo $row['StudentRegno']?>"> <button class="btn btn-primary"><i class="fa fa-check "></i> View Enroll History</button> </a>
                                            </td>
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>





        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('includes/footer.php');?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
<?php } ?>
