<?php
// the message
require_once('/opt/lampp/htdocs/utube1/PHPMailer/src/Exception.php');
require_once('/opt/lampp/htdocs/utube1/PHPMailer/src/OAuth.php');
require_once('/opt/lampp/htdocs/utube1/PHPMailer/src/PHPMailer.php');
require_once('/opt/lampp/htdocs/utube1/PHPMailer/src/SMTP.php');
include_once 'database.php';
$mail=new PHPMailer\PHPMailer\PHPMailer();
//$mail->isSMTP();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';

// optional
// used only when SMTP requires authentication  
$mail->SMTPAuth = true;
//$mail->SMTPDebug = 2;
$mail->SMTPAuth=true;
$mail->SMTPSecure=PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
//$mail->Host = "ssl://smtp.gmail.com";
$mail->Port='465';
$mail->isHTML();
$mail->Username='jajuexcellenteducation@gmail.com';
$mail->Password='MauliRukhmini';
$mail->setFrom('jajuexcellenteducation@gmail.com');
//$mail->Subject='Hello';
//$mail->Body='Second Test Email';
//$mail->AddAddress('jajudiya9@gmail.com');
//if(!$mail->Send()) {
 //   echo "Mailer Error: " . $mail->ErrorInfo;
 //} else {
  //  echo "Message has been sent";
 //}


$result = mysqli_query($con,"SELECT * FROM fee");
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  
  $class = ($_POST['class']);
  $notice=($_POST['notice']); 
  $subject=($_POST['subject']);
  $query="SELECT email from student WHERE class='$class'";
  $rs = mysqli_query($con,$query) or die("Query Failed".mysqli_error($con));
  if (mysqli_num_rows($rs)>0)
    {
        $mail->Subject=$subject;
        $mail->Body=$notice;
        while ($row = $rs->fetch_assoc()) {
            $add = $row["email"];
            $mail->AddAddress($add);
            if(!$mail->Send()) {
             echo "Mailer Error: " . $mail->ErrorInfo;
            } else 
            {
             echo "Message has been sent";
            }
            
        }
	    exit;
    }
 else
 {
     echo("<br><br><br><div class=head1>No such student</div>");
     exit;
 }
}
?> 
<html>
<head>
<title></title>
</head>
<body>
<div class="w3-sidebar w3-bar-block w3-white w3-animate-left" style="display:none;z-index:4" id="mySidebar">
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close</button>
  <a href="changeFee.php" class="w3-bar-item w3-button">Fee Structure</a>
  <a href="#id2" class="w3-bar-item w3-button">Students Info</a>
  <a href="#id3" class="w3-bar-item w3-button">Notices</a>
  <a href="#id4" class="w3-bar-item w3-button">Timetable</a>
</div>

<!-- Overlay -->
<div class="w3-overlay" onclick="w3_close()" style="cursor:pointer"></div>

<!-- Page content -->
<button class="w3-button w3-xxlarge" onclick="w3_open()">&#9776;</button>
<div padding="20px" margin="20px">
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Form</h2 u>
  </div>
  <div class="w-50 m-auto" >
    <form name="noticeForm" action="" method="post">
    <div class= "form-group">
      <label>Subject</label>
      <textarea class="form-control" name="subject"></textarea>
    </div>
    <div class= "form-group">
      <label>Notice</label>
      <textarea class="form-control" name="notice"></textarea>
    </div>
    
    <div class="form-group">
      <label>Class</label>
      <select name="class">
            <option value="6">6</option> 
            <option value="7">7</option> 
            <option value="8">8</option> 
            <option value="9">9</option> 
            <option value="10">10</option> 
             
        </select>
    </div>
    <button type="submit" class="btn btn-primary" class="form-group">Submit</button>
    </form>
  </div>

</section>
</div>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script> 
</body>
</html>