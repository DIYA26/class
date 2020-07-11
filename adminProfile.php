<?php

?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    
</head>
<body>
<div class="w3-sidebar w3-bar-block w3-white w3-animate-left" style="display:none;z-index:4" id="mySidebar">
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close</button>
  <a href="changeFee.php" class="w3-bar-item w3-button">Fee Structure</a>
  <a href="#id2" class="w3-bar-item w3-button">Students Info</a>
  <a href="notices.php" class="w3-bar-item w3-button">Notices</a>
  <a href="#id4" class="w3-bar-item w3-button">Timetable</a>
</div>

<!-- Overlay -->
<div class="w3-overlay" onclick="w3_close()" style="cursor:pointer"></div>

<!-- Page content -->
<button class="w3-button w3-xxlarge" onclick="w3_open()">&#9776;</button>

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