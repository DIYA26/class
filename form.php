<!DOCTYPE html>
<html>
<head>
    <title></title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/jquery-2.0.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Academics
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Fee Structure</a>
        <a class="dropdown-item" href="regform.php">Register</a>
        <a class="dropdown-item" href="#">Login</a>
      </div>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="form.php">Contact</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="jumbotron">
  <h1>Jaju Coaching Classes</h1>
  <p>The most popular coaching in Shevgaon</p>
</div>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Form</h2 u>
  </div>
  <div class="w-50 m-auto" >
    <form name="form" action="userinfo.php" onsubmit="return validateForm()" method="post">
    <div class= "form-group">
      <label>Username</label>
      <input type="text" name="user" class="form-control"/>
    </div>
    <div class="form-group">
      <label>Email Id</label>
      <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
      <label>Mobile No</label>
      <input type="text" name="mno" class="form-control">
    </div>
    <div class="form-group">
      <label>Comments</label>
      <textarea class="form-control" name="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" class="form-group">Submit</button>
    </form>
  </div>

</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@jajuclasses</p>
</footer>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
