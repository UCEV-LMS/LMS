<?php
require('dbconn.php');


$title=$_GET['id1'];
$rollno=$_GET['id2'];
$author=$_GET['id3'];
$type=$_GET['id4'];
$acc=$_GET['id5'];

$d=strtotime("+15 Days");
$dor=date("Y-m-d", $d);
$doi=date("y-m-d");

$sql="select BooksIssued from jntugv_library.users where MemberID='$rollno'";
$result=$conn->query($sql);
$row1=$result->fetch_assoc(); 

if($type=='Faculty')
{




$sql1="insert into  jntugv_library.bookissues(MemberId,Title,Author,DateOfIssue,DateOfReturn,FromAccNo) values ('$rollno', '$title','$author', '$doi','$dor','$acc')";



 
if($conn->query($sql1) === TRUE)
{$sql3="update jntugv_library.books set Volume=Volume-1 where FromAccNo='$acc' or Title='$title' or Author='$author' ";
 $result=$conn->query($sql3);
 $sql4="update jntugv_library.users set BooksIssued=BooksIssued+1 where MemberID='$rollno'";
 $result2=$conn->query($sql4);
 


echo "<script type='text/javascript'>alert('Book Issued')</script>";

header( "Refresh:0.01; url=issue_requests.php", true, 303);
}

else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
   header( "Refresh:1; url=issue_requests.php", true, 303);

}

}
else
{
	if($row1['BooksIssued']<4)
	{

$sql1="insert into  jntugv_library.bookissues(MemberID,Title,Author,DateOfIssue,DateOfReturn,FromAccNo) values ('$rollno', '$title','$author', '$doi','$dor','$acc')";



 
if($conn->query($sql1) === TRUE)
{
	$sql3="update jntugv_library.books set Volume=Volume-1 where Title='$title' and Author='$author' and FromAccNo='$acc'";
 $result=$conn->query($sql3);
 $sql4="update jntugv_library.users set BooksIssued=BooksIssued+1 where MemberID='$rollno'";
 $result2=$conn->query($sql4);
 


echo "<script type='text/javascript'>alert('Book Issued')</script>";

header( "Refresh:0.01; url=issue_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
   header( "Refresh:1; url=issue_requests.php", true, 303);

}
}
else
{
	echo "<script type='text/javascript'>alert('Books Exceeded')</script>";
	   header( "Refresh:1; url=issue_requests.php", true, 303);


}
}




?>