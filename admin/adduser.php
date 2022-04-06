<?php
require('dbconn.php');
require("user_auth.php");

?>

<?php 
if ($_SESSION['MemberID']) {
    ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <style>
   
/* set entire body that is webpage */

/* set form background colour*/
form{
  box-shadow: 2px 2px solid black;
    background-color: blue;
}


/* set padding and size of th form */
.form-container{
    border-radius: 10px;
    box-shadow: 2px 2px black;
}

/* set entire body that is webpage */
/* set form background colour*/
form{
    margin-top: 20px;
    background: #fff;
}
/* set padding and size of th form */
.form-container{
    border-radius: 10px;
    padding: 30px;
}
</style>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LMS</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
             <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                 <script>
                setInterval(function(){
                    check_user();
                },2000);
                function check_user(){
                    jQuery.ajax({
                        url:'user_auth.php',
                        type:'post',
                        data:'type=ajax',
                        success:function(result){
                            if(result=='logout'){
                                window.location.href='logout.php';
                            }
                        }
                        
                    });
                }
</script>

 
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">JNTUGV </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <h2 style="float: right;color: white">&nbsp;&nbsp;<?php echo $_SESSION['MemberID']?></h2>

                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php">Your Profile</a></li>
                                    <!--li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li-->
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper" >
            <div class="container">
                <div class="row">
                    <div  class="span3">
                        <div  class="sidebar">
                            <ul  class="widget widget-menu unstyled">
                                <li><a href="index.php" ><i  class="menu-icon icon-home"></i>Home
                                </a></li>
                                <li><a href="users.php"><i  class="menu-icon icon-home"></i>Users
                                </a></li>
                                <li><a href="adduser.php" class="active"><i  class="menu-icon icon-home"></i>Add User
                                </a></li>
                                <li><a href="book.php"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="addbook.php"><i class="menu-icon icon-edit"></i>Add Books </a></li>
                              <li><a href="issue_requests.php"><i class="menu-icon icon-tasks"></i>Book Issue</a></li>
                                <li><a href="return_requests.php"><i class="menu-icon icon-tasks"></i>Book Return</a></li>

                                <li><a href="current.php"><i class="menu-icon icon-list"></i>Currently Issued Books </a></li>
                                <li><a href="recommendations.php"><i class="menu-icon icon-list"></i>Book Recommendations </a></li>
                                <li><a href="leader.php" ><i  class="menu-icon icon-home"></i>LeaderBoard
                                </a></li>
                                <li><a href="feedback.php"><i  class="menu-icon icon-home"></i>Feedback
                                </a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                 
                       

                   <div class="span9">
                        <div class="module">
                            <div style="background-color: #003366;" class="module-head">
                                <h3 style="color: white;">Add User</h3>
                            </div>
                            <div class="module-body">


                                  
                                
                                <form class="form-horizontal row-fluid" action="adduser.php" method="post">


                                    <div class="control-group">
                                        <label class="control-label" for="category"><b>Category:</b></label>
                                        <div class="controls">
                                               <select   name="Category" id="cat">

                                            <option value="PG">PG</option>
                                            <option value="UG">UG</option>
                                            <option value="Teaching Staff">Teaching Staff</option>
                                            </select>                                        
                                        </div>
                                    </div>

                                     <div class="control-group">
                                        <label class="control-label" for="cd"><b>Course Designation:</b></label>
                                        <div class="controls">
                                            <input type="text" id="cd" name="Course_Designation" class="span8" required>
                                        </div>
                                    </div>

                                     <div class="control-group">
                                        <label class="control-label" for="institute"><b>Institute:</b></label>
                                        <div class="controls">
                                            <input type="text" id="institute" name="Institute" class="span8" required>
                                        </div>
                                    </div>

                                  

                                     <div class="control-group">
                                        <label class="control-label" for="department"><b>Department:</b></label>
                                        <div class="controls">
                                            <select   name="Department" id="dept">
                                            <option value="CSE">CSE</option>
                                            <option value="EEE">EEE</option>
                                            <option value="ECE">ECE</option>
                                            <option value="IT">IT</option>
                                            <option value="CIV">CIV</option>
                                            <option value="MECH">MECH</option>
                                            <option value="MET">MET</option>
                                            <option value="SS">SS</option>
                                            <option value="APS">APS</option>


                                        </select>
                                        </div>
                                    </div>

                                     <div class="control-group">
                                        <label class="control-label" for="surname"><b>Surname:</b></label>
                                        <div class="controls">
                                            <input type="text" id="surname" name="Surname" class="span8" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="Name"><b>Name:</b></label>
                                        <div class="controls">
                                            <input type="text" id="Name" name="Name" class="span8" required>
                                        </div>
                                    </div>

                                    

                                    <div class="control-group">
                                        <label class="control-label" for="MobNo"><b>Mobile Number:</b></label>
                                        <div class="controls">
                                            <input type="number" id="MobNo" name="Phone"  class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="EmailId"><b>Email Id:</b></label>
                                        <div class="controls">
                                            <input type="email" id="EmailId" name="Email"  class="span8" required>
                                        </div>
                                    </div>



                                    <div class="control-group">
                                        <label class="control-label" for="id"><b>MemberID:</b></label>
                                        <div class="controls">
                                            <input type="text" id="id" name="MemberID"  class="span8" required>
                                        </div>
                                    </div>



                                    <div class="control-group">
                                        <label class="control-label" for="dob"><b>DateOfBirth:</b></label>
                                        <div class="controls">
                                            <input type="Date" id="dob" name="DateOfBirth"  class="span8" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="type"><b>Type:</b></label>
                                        <div class="controls">
                                                <select   name="Type" id="type">
                                            <option value="Student">Student</option>
                                            <option value="Faculty">Faculty</option>
                                            <option value="Admin">Admin</option>
                                            

                                        </select>                                       
                                         </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="Password"><b>Password:</b></label>
                                        <div class="controls">
                                            <input type="password" id="Password" name="Password"   class="span8" required>
                                        </div>
                                    </div>   

                                    <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class=" btn btn-primary"><center>ADD USER</center></button>
                                            </div>
                                        </div>                                                                     

                                </form>
                                       
                        </div>
                        </div>  
                    </div>




</div>
</div>
</div>







                   
<div class="footer">
            <div class="container">
                <center><b class="copyright"><b>JNTU GV-UCEV Library Management System</b></center>
            </div>
        </div>
        
        <!--/.wrapper-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>

</html>


<?php }
 

if(isset($_POST['submit']))
{
     $cat=$_POST['Category'];
    $cd=$_POST['Course_Designation'];
    $institute=$_POST['Institute'];
    $dept=$_POST['Department'];
    $sname=$_POST['Surname'];
    $name=$_POST['Name'];
    $mobno=$_POST['Phone'];
    $email=$_POST['Email'];
    $rollno=$_POST['MemberID'];
    $dob=$_POST['DateOfBirth'];
    $type=$_POST['Type'];
    $password=$_POST['Password'];

    $sql="insert into jntugv_library.users(Category,Course_Designation,Institute,Department,Surname,Name,Phone,Email,MemberID,DateOfBirth,Type,Password) 
    values('$cat','$cd','$institute','$dept','$sname','$name','$mobno','$email','$rollno','$dob','$type','$password')";

    if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Registration Successful')</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('User Exists')</script>";
}
}
?>