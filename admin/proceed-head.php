<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['alogin'])==0 or strlen($_SESSION['pcode'])==0)
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
$query = "INSERT INTO courseenrollsconfirm (StudentRegno,roll,studentname,department,course) VALUES ('$StudentRegno','$rollNo','$studentname','$department','".$language[$i]."')"; 
$query1 = "DELETE From courseenrolls where StudentRegno='$StudentRegno' and course ='".$language[$i]."' "; 

mysqli_query($con,$query);
mysqli_query($con,$query1);
  
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
    <title>Proceed-Head</title>
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
      <h1 style="color: green;" align="center">Requests Proceed To Head</h1>         
               

  
        
    <!-- CONTENT-WRAPPER SECTION END-->
    
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
