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
    <title>Sem6</title>
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
    <label for="StudentRegno">Reg No  </label>
    <input type="text" class="form-control" id="StudentRegno" name="StudentRegno" value="<?php echo htmlentities($row['StudentRegno']);?>"  />
  </div>
     <div class="form-group">
    <label for="studentname">Student Name  </label>
    <input type="text" class="form-control" id="studentname" name="studentname" value="<?php echo htmlentities($row['studentName']);?>"  />
  </div>
 <div class="form-group">
    <label for="Roll NO">Roll NO   </label>
    <input type="text" class="form-control" name="rollNo" value="<?php echo htmlentities($row['rollNo']);?>" >
  </div>
  <div class="form-group">
    <label for="Department">Department   </label>
    <input type="text" class="form-control" name="department" value="<?php echo htmlentities($row['department']);?>" >
  </div>
    <div><h4>Select Courses You Want To Enroll</h4></div>
    
    <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4000 Project/Thesis I(Credit-0.75)" />
                          CSE 4000 Project/Thesis I(Credit-1.0)

                </div>
            </div>
          </div>
        </div>
      </div>
        <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4101 Compiler Design(Credit-3.0)" /> 
                          CSE 4101 Compiler Design(Credit-3.0)
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
          <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4102 Sessional Based on CSE 4101(Credit-0.75)" /> 
                          CSE 4102 Sessional Based on CSE 4101(Credit-0.75)
                        </div>
            </div>
          </div>
        </div>
      </div>

            <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4103 Digital Signal Processing(Credit-3.0)" />CSE 4103 Digital Signal Processing(Credit-3.0)
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
             <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4104 Sessional Based on CSE 4103(Credit-0.75)" />CSE 4104 Sessional Based on CSE 4103(Credit-0.75)
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
            
            <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4105 Digital Image Processing(Credit-3.0)"/>
                          CSE 4105 Digital Image Processing(Credit-3.0)
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4106 Sessional Based on CSE 4105(Credit-0.75)"/>CSE 4106 Sessional Based on CSE 4105(Credit-0.75)

                        </div>
                      </div>
                    </div>
                  </div>
            </div>
             <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4107 Information System Analysis & Design(Credit-3.0)"/>
                          CSE 4107 Information System Analysis & Design(Credit-3.0)

                        </div>
                      </div>
                    </div>
                  </div>
            
        </div>
            
              <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4108 Sessional Based on
CSE 4107(Credit-0.75)"/>
                          CSE 4108 Sessional Based on CSE 4107(Credit-0.75)

                        </div>
                       </div>
                     </div>
                   </div>
                  </div>

                  <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4109 Unix Programming(Credit-3.0)"/>
                         CSE 4109 Unix Programming(Credit-3.0)
                        </div>
                       </div>
                     </div>
                   </div>
                  </div>
                  <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4110 Sessional Based on
CSE 4109(Credit-0.75)"/>
                         CSE 4110 Sessional Based on CSE 4109(Credit-0.75)
                        </div>
                       </div>
                     </div>
                   </div>
                  </div>
                  <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CCSE 4111 Digital System Design(Credit-3.0)"/>
                         CSE 4111 Digital System Design(Credit-3.0)
                        </div>
                       </div>
                     </div>
                   </div>
                  </div>
                  <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4112 Sessional Based on
CSE 4111(Credit-0.75)"/>
                         CSE 4112 Sessional Based on CSE 4111(Credit-0.75)
                        </div>
                       </div>
                     </div>
                   </div>
                  </div>
                  <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CHE 1113- Inorganic Chemistry"/>
                         CSE 4113 Simulation & Modeling(Credit-3.0)
                        </div>
                       </div>
                     </div>
                   </div>
                  </div>
                  <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4114 Sessional Based on CSE 4113(Credit-0.75)"/>
                          CSE 4114 Sessional Based on CSE 4113(Credit-0.75)
                        </div>
                       </div>
                     </div>
                   </div>
                  </div>
                  <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4115 Wireless Networks(Credit-3.0)"/>
                         CSE 4115 Wireless Networks(Credit-3.0)
                        </div>
                       </div>
                     </div>
                   </div>
                  </div>
                  <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4116 Sessional Based on
CSE 4115(Credit-0.75)"/>
                         CSE 4116 Sessional Based on
CSE 4115(Credit-0.75)
                        </div>
                       </div>
                     </div>
                   </div>
                  </div>
                  <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4117 Parallel and Distributed Processing(Credit-3.0)"/>
                         CSE 4117 Parallel and Distributed Processing(Credit-3.0)
                        </div>
                       </div>
                     </div>
                   </div>
                  </div>
                  <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4119 Human Computer Interaction(Credit-3.0)"/>
                        CSE 4119 Human Computer Interaction(Credit-3.0)
                        </div>
                       </div>
                     </div>
                   </div>
                  </div>
                  <div class="form-group">
                <div class="row" >
                  <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <input type="checkbox" name="language[]" value="CSE 4121 Switching Systems(Credit-3.0)"/>
                         CSE 4121 Switching Systems(Credit-3.0)
                        </div>
                       </div>
                     </div>
                   </div>
                  </div>
                <p><input type="submit" name="submit" class="btn btn-info" value="Submit" /></p>
          </form>


  <?php } ?>
  
        
    <!-- CONTENT-WRAPPER SECTION END-->
    
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
