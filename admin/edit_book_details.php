<?php
ob_start();
require('dbconn.php');
require("user_auth.php");

$bookid = $_GET['id1'];
$ac=$_GET['id2'];
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
                                <li><a href="users.php"><i  class="menu-icon icon-home"></i>Users
                                </a></li>
                                <li><a href="adduser.php"><i  class="menu-icon icon-home"></i>Add User
                                </a></li>
                                <li><a href="book.php" class="active"><i class="menu-icon icon-book"></i>All Books </a></li>
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
                                <h3 style="color: white;">Update Book Details</h3>
                            </div>
                            <div class="module-body">

                                <?php
                                    
                                    $sql = "select * from jntugv_library.books where FromAccNo='$ac' or Title='$bookid' ";
                                    $result=$conn->query($sql);
                                    $row=$result->fetch_assoc();
                                    $name=$row['Title'];
                                    $publisher=$row['Publisher'];
                                    $year=$row['Year'];
                                    $author=$row['Author'];
                                    $pages=$row['NoOfPages'];
                                    $vol=$row['Volume'];
                                    $acc=$row['FromAccNo'];
                                   
                                    
                                ?>

                                    <br >
                                    <form class="form-horizontal row-fluid" action="edit_book_details.php?id1=<?php echo $name ?>&id2=<?php echo $acc?>" method="post">
                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Title">Book Title:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Title" name="Title" value= "<?php echo $name?>" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Publisher">Publisher:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Publisher" name="Publisher" value= "<?php echo $publisher?>" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Year">Year:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Year" name="Year" value= "<?php echo $year?>" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="author">Author:</label></b>
                                            <div class="controls">
                                                <input type="text" id="author" name="Author" value= "<?php echo $author?>" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="pages">No Of Pages:</label></b>
                                            <div class="controls">
                                                <input type="text" id="pages" name="NoOfPages" value= "<?php echo $pages?>" class="span8" required>
                                            </div>
                                        </div>

                                          <div class="control-group">
                                            <b>
                                            <label class="control-label" for="volume">Volume:</label></b>
                                            <div class="controls">
                                                <input type="text" id="volume" name="Volume" value= "<?php echo $vol?>" class="span8" required>
                                            </div>
                                        </div>


                                        


                                       
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="btn btn-primary">Update Details</button>
                                            </div>
                                        </div>

                                    </form> 
                                    </div>   
                                    </div>          
                    </div>
                    
                    <!--/.span9-->
                </div>
            </div>
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

<?php
if(isset($_POST['submit']))
{
    $bookid = $_GET['id1'];
    $acn=$_GET['id2'];
    $name=$_POST['Title'];
    $publisher=$_POST['Publisher'];
    $year=$_POST['Year'];
    $author=$_POST['Author'];
    $pages=$_POST['NoOfPages'];
    $vol=$_POST['Volume'];
    $acc=$_POST['FromAccNo'];
    
    

$sql1="update jntugv_library.books set Title='$name', Publisher='$publisher', Year='$year', Author='$author',NoOfPages='$pages', Volume='$vol'  where FromAccNo='$acc' or Title='$bookid' ";



if($conn->query($sql1) === TRUE){
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=book.php", true, 303);
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert('Error')</script>";
}
}
?>
      
    </body>

</html>


<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>