<?php
 include('includes/con.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/log.png">
  <title>Rafay Agency-Signup</title>
</head>
<body>
<div class="container p-3">
    <h3>Signup Here</h3>
		<div class="row">
	       <div class="col">
             <form action="" method="POST" enctype="multipart/form-data" class="shadow p-4">
			   <div class="form-floating p-1">
				<input type="text" id="fname" name="firstname" placeholder="First Nmae" class="form-control" required>
				<label for="fname">First Name</label></div>
			  <div class="form-floating p-1">
                <input type="text" name="lastname" id ="lastname" placeholder="Last Nmae" class="form-control" required>
				<label for="lastname">Last Name</label></div>
			  <div class="form-floating p-1">
                <input type="email" name="email" placeholder="E-mail" class="form-control" required>
				<label for="email">Email</label></div>
			  <div class="form-floating p-1">
                <input type="pass" name="password" placeholder="Password" class="form-control" required>
				<label for="password">Password</label></div><br />
				<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
                <input type="submit" name="sub" value="Submit" class="btn btn-danger"><a href="index.php"><b>  Already have Account.</b></a>
           </form>
	  </div>
	</div>
  </div>
<?php
if(isset($_POST['sub'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	  $query="insert into users(first_name, last_name, user_email, password,image )values('$firstname','$lastname','$email','$password','$target_file')";
	$run=mysqli_query($conn,$query);
	if($run){
		echo"<script>alert('signup successfully.')</script>";
    }else{
	echo"<script>alert('error:')</script>".mysqli_error($conn);
     }
}
}
}
?>
</body>
</html>