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
<style type="text/css">
              .autocom-box li
              {
                list-style: none;
                padding: 8px 12px;
                width: 85%;
                cursor: default;
                border-radius: 3px;
                display: none;

              }
              .autocom-box li:hover
              {
                background-color: #efefef;
              }

              .span9 .control-group .controls .search-input.active .autocom-box {
                padding:10px 8px;
                opacity: 1;
                pointer-events: auto;
              }
              .span9 .control-group .controls .search-input.active .autocom-box li
              {
                max-height:280px;
                overflow-y: auto;
                display: block;

              }

             
          </style>  

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
                            <ul class="widget widget-menu unstyled">
                                <li ><a href="index.php" ><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                 
                                <li><a href="book.php" class="active"><i class="menu-icon icon-book"></i>All Books </a></li>
                                
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

                    <div class="span9">
                   <form class="form-horizontal row-fluid" action="book.php" method="post">
                                        <div class="control-group">
                                                <label style="margin-top: 10px;font-size: 20px;" class="control-label" for="Search"><b>Search:</b></label>                                         
                                                 <div class="controls">
                                                <!--<input type="text" id="title" name="title" placeholder="Enter Name/Roll No of Student" class="span8" required>
                                                <button type="submit" name="submit"class="btn">Search</button>-->

                                                
                                                    <div  class="search-input" style="padding:0px;background: #fff;width: 90%;border-radius: 5px;box-shadow: 0px 1px 5px 3px rgba(0,0,0,0.12);position: relative;">
                                                        
                                                        <input style="height: 45px;width: 100%;
                                                        outline: none;
                                                        border:none;border-radius: 5px;padding: 0 60px 0 20px;font-size: 18px;box-shadow:0px 1px 5px rgba(0,0,0,0.1);  " type="text" name="title" placeholder="Type to search...." class="span8">
                                                       <div class="autocom-box">
                                                       <li>hello</li>
                                                       <li>hi</li>
                                                       <li>namesthey</li> 
                                                       <li>welcome</li>
                                                       <li>vanakkam</li>

                                                    </div>
                                                    <div style="height: 55px;width: 55px;line-height: 38px;position:absolute;top: 0;
                                                    right: 0;text-align: center;font-size: 20px;color: blue;cursor: pointer; " class="icon" >
                                                     <button type="submit" name="submit"class="btn"><i  class="menu-icon icon-search"></i></button>

                                                    
                                                </div>



                                            </div>



                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <?php
                                    if(isset($_POST['submit']))
                                        {$s=$_POST['title'];
                                            $sql="select * from jntugv_library.books where Department='$s' or Title like '%$s%' LIMIT 10";
                                        }
                                    else
                                        $sql="select * from jntugv_library.books LIMIT 10";

                                    $result=$conn->query($sql);
                                    $rowcount=mysqli_num_rows($result);

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
                                      <th>Availability</th>
                                      <th>Department</th>
                                      <th>FromAccNo</th>
                                      <!--<th>Availability</th>-->
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                            
                            //$result=$conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $name=$row['Title'];
                                $author=$row['Author'];
                                $publisher=$row['Publisher'];
                                $noofpages=$row['NoOfPages'];
                                $volume=$row['Volume'];
                                $sql4="select DateOfReturn from jntugv_library.bookissues where Title='$name' and Author='$author' order by DateOfReturn LIMIT 1";
                                $result4=$conn->query($sql4);
                                $row4=$result4->fetch_assoc();
                                //$avail=$row4['DateOfReturn'];



                             $dept=$row['Department'];
                             $acc=$row['FromAccNo'];

                               // $avail=$row['Availability'];
                            
                           
                            ?>
                                    <tr>
                                      <td><?php echo $name ?></td>
                                       <td><?php echo $author ?></td>

                                      <td><?php echo $publisher ?></td>

                                      <td><?php echo $noofpages ?></td>
                                      <td><?php echo $volume ?></td>
                                      <?php
                                      if($volume>0)
                                      {
                                        echo "<td>Available</td>";

                                      }
                                      else
                                      {
                                        $avail=$row4['DateOfReturn'];
                                       echo "<td>$avail</td>";

                                      }
                                      ?>
                                      <td><?php echo $dept ?></td>
                                    <td><?php echo $acc ?></td>
       



                                     <!-- <td><b><?php echo $avail ?></b></td>-->
                                        <td><center>
                                            <a href="bookdetails.php?id=<?php echo $name; ?>" class="btn btn-primary">Details</a>
                                            <?php
                                            ?>

                                            
                                            
                                        </center></td>
                                    </tr>
                               <?php }} ?>
                               </tbody>
                                </table>
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
        <script src="booksuggestions.js"></script>
       <script src="bscript.js"></script>
      
    </body>

</html>


<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>