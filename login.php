<?php
session_start();
$message="";
if(count($_POST)>0) {
include_once 'database.php';

$un = $_POST['uname'];
$pw = $_POST['pwd'];
$result = mysqli_query($con,"SELECT * FROM student WHERE (uname='$un' AND pw='$pw')") or die("Query Failed".mysqli_error($con));
$row = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["uname"] = $row["uname"];
$message="Logged in successfully!";
echo $row["school"];
} 
else 
{
$message = "Invalid Userid or email or Password!";
}

}
if(isset($_SESSION["uname"])) {
echo "Success";
}

?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="loginForm" method="post" action="profile.php" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
Username:<br>
<input type="text" name="uname">
<br>
Password:<br>
<input type="password" name="pwd">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>