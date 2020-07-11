<?php
$con = mysqli_connect("localhost","root","","utube1") or die($conn);
if($con)
{
    echo "Connection successfull";
}
else{
    echo "Not connected";
}
mysqli_select_db($con, 'utube1');
$user=$_POST['user'];
$email=$_POST['email'];
$mno=$_POST['mno'];
$comment=$_POST['comment'];
$user = mysqli_real_escape_string($con,$user);
$email = mysqli_real_escape_string($con,$email);
$user = mysqli_real_escape_string($con,$mno);
$comment = mysqli_real_escape_string($con,$comment);
$result = mysqli_query($con,"insert into form(user,email,mno,comment) values ('$user','$email','$mno','$comment')") or die("Query Failed".mysqli_error($con));

echo $result;
header('location:index.php');
?>