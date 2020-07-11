<?php
include_once 'database.php';
$result = mysqli_query($con,"SELECT * FROM fee");
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  
  $class = ($_POST['class']);
  $fee = ($_POST['fee']); 
  $query="UPDATE fee SET fee='$fee' WHERE class='$class'";
  $rs = mysqli_query($con,$query) or die();
}
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
 <link rel="stylesheet" href="css/table.css">
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

<aside>
<div>
<form name="feeForm" action = "" method = "post">
    <label>Class  :</label><input type = "text" name = "class" class = "box"/><br /><br />
    <label>New Fee  :</label><input type = "text" name = "fee" class = "box" /><br/><br />
    <input type = "submit" value = " Submit "/><br />
</form>

</div>
</aside>
<aside>
<div id="idFee" class="w-50 m-auto" padding="20px" margin="30px">
<h3>Class wise yearly fee structure</h3>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table padding="20px" margin="10px">
  
  <tr>
    <td>Index</td>
    <td>Class</td>
    <td>Fee</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["class"]; ?></td>
    <td><?php echo $row["fee"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
    echo "No result found";
}
?>
</div>
</aside>
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