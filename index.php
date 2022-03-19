<?php
include("../includes/menu.php");
?>
<title>Contact us</title>
<body style="background:rgba(0,0,0,0.05);">
<div class="container-fluid">
  <div class="row p-3">
	<div class="col-sm-6 offset-md-3 shadow p-5">
	         <h1><img src="pics/contact-us.png" width="60px">Contact us</h1><br />
			 <a href="https://g.page/qaimpur-punjab-pakistan?share">
			 <img src="pics/navigation.png" width="30px">  Near National Bank Qaimpur</a><br> <hr>
			 <a href="mailto:rafayabdul385@gmail.com" >
			 <img src="pics/gmail.png" width="30px">  rafayabdul385@gmail</a><br><hr>
			 <a href="tel:923058160900"><img src="pics/phone.png" width="30px">  03058160900</a><hr>
		     <div class="form">
			    <form action="" method="POST">
				<div class="form-floating">
                <input type="email" name="email" placeholder="E-mail" class="form-control" id="email" required> 
				<label for="email">Email</label></div><br />
				<div class="form-floating">
                <input type="pass" name="message" placeholder="message" class="form-control" id="message"required>
				<label for="message">Message</label></div><br />
                <input type="submit" value="Send Message" name="submit" class="btn btn-primary">
				</form>
		     </div>
	       </div>
        </div>
  <div class="row">
    <div class="col">
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3466.1499027510636!2d72.41790111443402!3d29.686433342352135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393c5fa8ab63f445%3A0x52bb7f8f3c1cf4bd!2sPasha%20Dairy%20Farms%20And%20Services!5e0!3m2!1sen!2s!4v1628963742835!5m2!1sen!2s" height="500px" width="100%"></iframe><br>
	</div>
   </div>
 </div>
<?php
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$message=$_POST['message'];
	$query="insert into message(user_email, message)values('$email','$message')";
	$run=mysqli_query($conn,$query);
	if($run){
		echo"<script>alert('Your Message has been sent.Thanks for contacts Us.')</script>";
	}
	else{
		echo"error:".mysqli_error($conn);
	}
}
?>
  </body>
</html>