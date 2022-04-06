<?php
require('dbconn.php');

$title=$_GET['id1'];
$rollno=$_GET['id2'];
$author=$_GET['id3'];
$acc=$_GET['id4'];



$dor=date('y-m-d');
$sql1="insert  into jntugv_library.bookreturns(MemberID,Title,Author,DateOfReturn,FromAccNo)values('$rollno','$title','$author' ,'$dor','$acc')";
 
if($conn->query($sql1) === TRUE)
{
 $sql3="update jntugv_library.books set Volume=Volume+1 where Title='$title' and Author='$author' and FromAccNo='$acc'";
 $result=$conn->query($sql3);

 $sql6="select DateOfIssue from jntugv_library.bookissues where MemberID='$rollno' and Title='$title' and Author='$author' and FromAccNo='$acc'";
 $result3=$conn->query($sql6);
  $row=$result3->fetch_assoc();
  $doi=$row['DateOfIssue'];    


 $date1_ts = strtotime($doi);
    $date2_ts = strtotime($dor);
    $diff = $date2_ts-$date1_ts;
    $days=round($diff / 86400);
    if($days<=15)
    {
      
      $sql7="update jntugv_library.users set Points=Points+5 where MemberID='$rollno'";
      $result7=$conn->query($sql7);

    }
    

 $sql4="delete from jntugv_library.bookissues where Title='$title' and Author='$author' and MemberID='$rollno' and FromAccNo='$acc'";
 $result=$conn->query($sql4);

 $sql5="update jntugv_library.users set BooksIssued=BooksIssued-1 where MemberID='$rollno'";
 $result2=$conn->query($sql5);

 


echo "<script type='text/javascript'>alert('Book Returned Success')</script>";
header( "Refresh:0.01; url=return_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=return_requests.php", true, 303);

}





?>