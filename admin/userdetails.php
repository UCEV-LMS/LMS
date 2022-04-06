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
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul  class="widget widget-menu unstyled">
                                <li><a href="index.php" ><i  class="menu-icon icon-home"></i>Home
                                </a></li>
                                <li><a href="users.php" class="active"><i  class="menu-icon icon-home"></i>Users
                                </a></li>
                                <li><a href="adduser.php"><i  class="menu-icon icon-home"></i>Add User
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
                        <div class="content">

                        <div class="module">
                            <div style="background-color: #003366;" class="module-head">
                                <h3 style="color: white;">Student Details</h3>
                            </div>
                            <div class="module-body">
                        <?php
                            $rno=$_GET['id'];
                            $sql="select * from jntugv_library.users where MemberID='$rno'";
                            $result=$conn->query($sql);
                            $row=$result->fetch_assoc();    
                            
                                $name=$row['Name'];
                                $sname=$row['Surname'];
                                $email=$row['Email'];
                                $mobno=$row['Phone'];
                                $dept=$row['Department'];
                                $bi=$row['BooksIssued'];
                                $points=$row['Points'];


                                echo "<b><u>Name:</u></b> ".$name." ".$sname."<br><br>";
                                echo "<b><u>Roll No:</u></b> ".$rno."<br><br>";
                                echo "<b><u>Department:</u></b> ".$dept."<br><br>";


                                echo "<b><u>Email Id:</u></b> ".$email."<br><br>";
                                echo "<b><u>Mobile No:</u></b> ".$mobno."<br><br>";
                                echo "<b><u>Books Issued:</u></b> ".$bi."<br><br>"; 
                                echo "<b><u>Points:</u></b> ".$points."<br><br>"; 
 
                            ?>
                            
                        <a href="users.php" class="btn btn-primary">Go Back</a>                             
                               </div>
                           </div>
                        </div>
                    </div>
                    <!--/.span9-->

                </div>
            </div>
            <br>
        <br><br><br><br><br><br><br>
            <!--/.container-->
        </div>

<div class="footer">
            <div class="container">
                <center><b class="copyright"><!--&copy;-->  <b> JNTU GV-UCEV Library Management System</b></center>
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
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>