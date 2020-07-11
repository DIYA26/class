<?php
  include_once 'database.php';
  include_once 'session.php';
  ?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
</head>
<body>
 <!-- Sidebar -->
 <div class="w3-sidebar w3-bar-block w3-white w3-animate-left" style="display:none;z-index:4" id="mySidebar">
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close</button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<!-- Overlay -->
<div class="w3-overlay" onclick="w3_close()" style="cursor:pointer"></div>

<!-- Page content -->
<button class="w3-button w3-xxlarge" onclick="w3_open()">&#9776;</button>
<div class="w3-container">
  <h1>Hello</h1>
  <?php
  echo($row["uname"]);
  echo $row["school"];
  ?>
</div>

<!-- JS to open and close sidebar with overlay effect -->
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
