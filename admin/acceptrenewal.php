<?php
require('dbconn.php');

$name=$_GET['id1'];
$rollno=$_GET['id2'];
$author=$_GET['id3'];
$acc=$_GET['id4'];

$doi=date("y-m-d");
$d=strtotime("+15 Days");
$dor=date("Y-m-d", $d);

$sql1="update jntugv_library.bookissues set DateOfReturn='$dor', DateOfIssue='$doi' where FromAccNo='$acc' or Title='$name' and MemberID='$rollno' and Author='$author'";
 
if($conn->query($sql1) === TRUE)
{
echo "<script type='text/javascript'>alert('Renewal Success')</script>";
header( "Refresh:0.01; url=issue_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:0.01; url=issue_requests.php", true, 303);

}






?>