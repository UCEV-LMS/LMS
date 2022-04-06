<?php
require('dbconn.php');
require("user_auth.php");

?>


<!DOCTYPE html>
<html lang="en">

    <head>
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">JNTUGV  </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <h2 style="float: right;color: white;">&nbsp;&nbsp;<?php echo $_SESSION['MemberID']?></h2>

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
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li ><a href="index.php" class="active"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                 
                                <li><a href="book.php"><i class="menu-icon icon-book"></i>All Books </a></li>
                                
                                <li><a href="recommendations.php"><i class="menu-icon icon-list"></i>Recommend Books </a></li>
                              <li><a href="current.php"><i class="menu-icon icon-book"></i>Currently Issued Books </a></li>
                                <li><a href="leader.php"><i class="menu-icon icon-list"></i>LeaderBoard </a></li>

                                <li><a href="feedback.php"><i class="menu-icon icon-list"></i>Feedback </a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                    	<center>
                           	<div class="card" style="width: 50%;margin-top: 40px;"> 
                    			<!--<img class="card-img-top" src="images/profile2.png" alt="Card image cap">-->
                    			<div style="background-color: #03a9f4;border-radius: 2px;box-shadow: 5px 10px 5px 5px #888888" class="card-body">

                                <?php
                                $rollno = $_SESSION['MemberID'];
                                $sql="select * from jntugv_library.users where MemberID='$rollno'";
                                $result=$conn->query($sql);
                                $row=$result->fetch_assoc();

                                $name=$row['Name'];
                                $email=$row['Email'];
                                $mobno=$row['Phone'];
                                $cat=$row['Category'];
                                $cd=$row['Course_Designation'];
                                $dept=$row['Department'];
                                $bi=$row['BooksIssued'];
                                $points=$row['Points'];
                                ?>    
                                    <i>
                                    <h1 class="card-title"><center><?php echo $name ?></center></h1>
                                    <br>
                                    <p><b>MemberID: </b><?php echo $rollno ?></p>
                                    <br>
                                    <p><b>Email ID: </b><?php echo $email ?></p>
                                    <br>
                                    <p><b>Phone: </b><?php echo $mobno ?></p>
                                    <br>
                                    <p><b>Category: </b><?php echo $cat ?></p>
                                    <br>
                                    <p><b>Course Designation: </b><?php echo $cd ?></p>
                                    <br>
                                    <p><b>Department: </b><?php echo $dept ?></p>
                                    <br>
                                    <p><b>Books Issued: </b><?php echo $bi ?></p>
                                    <br>
                                    <p><b>Points: </b><?php echo $points ?></p>
                                    </b>
                                </i>

                    			</div>
                    		</div>
                            <br>
                            <a href="edit_student_details.php" class="btn btn-primary">Edit Details</a>    
      					</center>              	
                    </div>
                    
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
<div class="footer">
            <div class="container">
                <center><b class="copyright">JNTU GV-UCEV Library Management System</center>
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