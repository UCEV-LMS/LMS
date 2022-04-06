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
                                <li><a href="users.php"><i  class="menu-icon icon-home"></i>Users
                                </a></li>
                                <li><a href="adduser.php"><i  class="menu-icon icon-home"></i>Add User
                                </a></li>
                                <li><a href="book.php"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="addbook.php"><i class="menu-icon icon-edit"></i>Add Books </a></li>
                               <li><a href="issue_requests.php" class="active"><i class="menu-icon icon-tasks"></i>Book Issue</a></li>
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
                   <div class="span9">
                        <div class="module">
                            <div style="background-color: #003366;" class="module-head">
                                <h3 style="color: white;">Issue Book</h3>
                            </div>
                            <div class="module-body">


                                  
                                
                                <form  class="form-horizontal row-fluid" action="issue_requests.php" method="post">


                                   

                                    

                                      <div class="control-group">
                                        <label class="control-label" for="id"><b>MemberID:</b></label>
                                        <div class="controls">
                                            <input type="text" id="id" name="MemberID" placeholder="Enter MemberID"  class="span8" required>
                                        </div>
                                    </div>
                                            <br>

                                    <label class="control-label" for="Search"><b>Search:</b></label>
                                            <div class="controls">
                                                <input type="text" id="title" name="Title" placeholder="Enter Book Name or Department" class="span8" required>
                                            </div>



                                   
                                                <br>

                                   
                                    <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                                            </div>
                                        </div>

                                </form>

                                <?php
                                if(isset($_POST['submit']))
                                    {
                             $rollno=$_POST['MemberID'];
                            $sql1="select * from jntugv_library.users where MemberID='$rollno'";
                            $s=$_POST['Title'];
                             $sql2="select * from jntugv_library.books where Department='$s' or Title like '%$s%' LIMIT 10";
                            $result1=$conn->query($sql1);
                            $row1=$result1->fetch_assoc();    
                                $type=$row1['Type'];
                                $name=$row1['Name'];
                                $dept=$row1['Department'];
                                $cat=$row1['Category'];
                                $cd=$row1['Course_Designation'];
                                $phone=$row1['Phone'];
                                $bi=$row1['BooksIssued'];
                                 echo "<b>MemberID:</b> ".$rollno."<br><br>";

                                echo "<b>Name:</b> ".$name."<br><br>";
                                
                                echo "<b>Department:</b> ".$dept."<br><br>";
                                echo "<b>Category:</b> ".$cat."<br><br>";
                                echo "<b>Course Designation:</b> ".$cd."<br><br>";
                               echo "<b>Phone:</b> ".$phone."<br><br>";
                               echo "<b>Books Issued:</b> ".$bi."<br><br>";


                               

                                $result2=$conn->query($sql2);
                                    $rowcount=mysqli_num_rows($result2);
                               

                                    if(!($rowcount))
                                        echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                                    else
                                    {

                                    
                                    ?>
                        <table class="table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th>Book name</th>
                                      <th>Author</th>
                                      <th>Publisher</th>
                                      <th>No Of Pages</th>
                                      <th>Volume</th>
                                      <th>Department</th>
                                      <!--<th>Availability</th>-->
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                            
                            //$result=$conn->query($sql);
                            while($row2=$result2->fetch_assoc())
                            {
                                $name=$row2['Title'];
                                $author=$row2['Author'];
                                $publisher=$row2['Publisher'];
                                $noofpages=$row2['NoOfPages'];
                                $volume=$row2['Volume'];
                                $dept=$row2['Department'];
                                $acc=$row2['FromAccNo'];
                               // $avail=$row['Availability'];
                            
                           
                            ?>
                                    <tr>
                                      <td><?php echo $name ?></td>
                                       <td><?php echo $author ?></td>

                                      <td><?php echo $publisher ?></td>

                                      <td><?php echo $noofpages ?></td>
                                      <td><?php echo $volume ?></td>
                                      <td><?php echo $dept ?></td>
                                       <td><center>

                                        <?php
                                        if($volume > 0)
                                        {echo "<a href=\"accept.php?id1=".$name."&id2=".$rollno."&id3=".$author."&id4=".$type."&id5=".$acc."\" class=\"btn btn-success\">Issue</a>";}
                                         ?>


                                     <!-- <td><b><?php echo $avail ?></b></td>-->
                                           <!-- <a href="bookdetails.php?id=<?php echo $name; ?>" class="btn btn-primary">Issue</a>-->
                                            
                                        </center></td>
                                    </tr>
                               <?php }}} ?>
                               </tbody>
                                </table>
                         

                                
                        
                           
                          
                        
                                       
                        </div>
                        </div>  
                    </div>



                    <!--/.span3-->
                    <!--/.span9-->




                                                               </div>
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
      
    </body>

</html>


<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>