<?php
session_start();

require('dbconn.php');
?>


<html>
<head>
 
   <title>Library Management System </title>

	<!-- Meta-Tags -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->


	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- //Fonts -->

</head>
 <style>
   
/* set entire body that is webpage */
body{
	background: #fff;
	padding-top: 25vh;	
}
/* set form background colour*/
form{
  border:3px solid blue;
	background: #fff;
}
/* set padding and size of th form */
.form-container{
	border-radius: 10px;
	padding: 30px;
}

/* set entire body that is webpage */
body{
	background: #fff;
	padding-top: 25vh;	
}
/* set form background colour*/
form{
	background: #fff;
}
/* set padding and size of th form */
.form-container{
	border-radius: 10px;
	padding: 30px;
}
</style>
<body>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Login form creation starts-->
  <section class="container-fluid">
    <!-- row and justify-content-center class is used to place the form in center -->
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-4">
      <form action="index1.php" method="post" class="form-container">
        <div class="form-group">
          <h4 class="text-center font-weight-bold"> Login </h4>
          <label for="InputEmail1">Id or UserName</label>
           <input type="text" class="form-control" id="InputEmail1" Name="MemberID" aria-describeby="emailHelp" placeholder="Enter RollNo or Username" required="" >
        </div>
        <div class="form-group">
          <label for="InputPassword1">Password</label>
          <input type="password" class="form-control" Name="Password" id="InputPassword1" placeholder="Password"  required="">
        </div>
        <button type="submit" value="Sign In" class="btn btn-primary btn-block" name="signin"><a style="color:#fff;text-decoration:none;">submit</a></button>
        <div class="form-footer">
          <p> Don't have an account? <a href="#">contact admin</a></p>
          
        </div>
        </form>
      </section>
    </section>
  </section>
<!-- Login form creation ends -->
</body>



<?php
if(isset($_POST['signin']))
{$u=$_POST['MemberID'];
 $p=$_POST['Password'];


 $sql="select * from jntugv_library.users where MemberID='$u'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$x=$row['MemberID'];
$y=$row['Type'];
if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p))
  {//echo "Login Successful";
   $_SESSION['MemberID']=$u;
   

  if($y=='Admin')
  {
   header('location:admin/index.php');
       $_SESSION['IS_LOGIN']='yes';

  }
  else
  {
    if ($y=='Student') {
      $_SESSION['IS_LOGIN']='yes';
      header('location:student/index.php');
    }
    else
    {
      $_SESSION['IS_LOGIN']='yes';
  	header('location:faculty/index.php');
    }
  }
        
  }
else 
 { echo "<script type='text/javascript'>alert('Failed to Login! Incorrect RollNo or Password')</script>";
}
   

}



?>


</html>
