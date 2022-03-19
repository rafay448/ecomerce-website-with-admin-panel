<?php
include('con.php');
  /* Start the session */
  session_start();
  // check if session not exist
  if(!isset($_SESSION['id'])){
    // redirect to login 
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
  <link rel="stylesheet" href="bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<!-- Bootstrap JS -->
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <link rel="shortcut icon" type="image/x-icon" href="\includes/logoo.png">
</head>
<body>
<header class="sticky-top shadow">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">  Rafay Digital</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item nav-pill">
          <a class="nav-link  nav-pills" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/product">Product</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
		
		  <?php
		  error_reporting(0);
          $query = "select * from admin";
          $data = mysqli_query($conn,$query);
          $total = mysqli_num_rows($data);
          echo $result['admin_email'];
          if($total!=0){
	      while($result=mysqli_fetch_assoc($data)){
		  if($_SESSION['user_email'] == $result['admin_email']){
		  ?>
		<li class="nav-item">
          <a class="nav-link" href="<?php echo "\admin"; ?> ">Admin-panel</a>
        </li>
	  <?php
		  }
		  }
		  }
		  ?>
	 </ul>
	  <div class="dropdown p-1">
          <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">
          <span>Hello, <?php echo $_SESSION['first_name'];echo"-"; echo $_SESSION['last_name']; ?></span>
          </button>
		  
     <ul class="dropdown-menu">
           <li><button class="dropdown-item" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">Profile</button></li>
           <li><a class="dropdown-item" href="/logout.php">Logout</a></li>
           </ul>
       </div>
    </div>
  </div>
</nav>
</header>
</body>
</html>
<?php
if(isset($_SESSION['id'])){
$id=$_SESSION['id'];
error_reporting(0);
$query = "select * from users where id= $id";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
if($total!=0){
	while($result=mysqli_fetch_assoc($data))
	{
?>
<!-- Offcanvas Sidebar -->
<div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Profile</h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
  <div class="card" style="width:350px">
  <img class="card-img-top" src="\<?php echo $result['image'];
  }
  }
  }
  ?>" />
  <div class="card-body">
    <h4 class="card-title"><?php echo $_SESSION['first_name'].$_SESSION['last_name']; ?></h4>
    <p class="card-text"><?php echo $_SESSION['user_email']; ?></p>
    <p class="card-text"><?php echo $_SESSION['password']; ?></p>
  </div>
</div>
  </div>
</div>