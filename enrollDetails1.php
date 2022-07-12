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
echo $rollNo;

if (isset($_POST["submit"]))  
{  echo $department;
for ($i=0; $i<sizeof ($language);$i++) {  
$query = "INSERT INTO courseenrolls (StudentRegno,roll,studentname,department,course) VALUES ('$StudentRegno','$rollNo','$studentname','$department','".$language[$i]."')";  
$query1 = "INSERT INTO courseenrollsconfirm (StudentRegno,roll,studentname,department,course) VALUES ('$StudentRegno','$rollNo','$studentname','$department','".$language[$i]."')";  

mysqli_query($con,$query);
mysqli_query($con,$query1);
echo $studentname;  
}  
echo "Record is inserted";  
} 
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<table class="table">
                                    <thead>
                                            
                                            
                                                
                                             <th>Course</th>
                                             <th>Action</th>
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
                                          
                                            
                                            <td>
                                            <a href="print.php?id=<?php echo $row['cid']?>" target="_blank">
<button class="btn btn-primary"><i class="fa fa-print "></i> Print</button> </a>                                        


                                            </td>
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
</body>
</html>

