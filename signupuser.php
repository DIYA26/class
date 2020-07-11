<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php

extract($_POST);
include("database.php");
$rs=mysqli_query($con,"select * from student where uname='$uname'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$class = $_POST["class"];
$query="insert into student(fname,lname,gen,class,school,email,uname,pw) values('$fname','$lname','$gender','$class','$sname','$email','$uname','$pw')";
$rs=mysqli_query($con,$query)or die("Query Failed".mysqli_error($con));
echo "<br><br><br><div class=head1>Your Username  $uname Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";


?>
</body>
</html>