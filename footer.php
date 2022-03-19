<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<!-- Bootstrap JS -->
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>

	footer {
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px 0px;
    margin-top: 50px;
    background-color: #fafafa;
}
footer .social-links {
    text-align: center;
    margin: 20px 0px;
}
footer .social-btn {
    display: inline-block;
    width: 50px;
    height: 50px;
    background: #2f4f4f;
    margin: 10px;
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0px 5px 10px 0px #909090;
    color: #ffffff;
    overflow: hidden;
    position: relative;
    border: 1px dotted #fff;
}
footer .social-btn i {
    line-height: 50px;
    font-size: 22px;
    transition: 0.2s linear;
}
footer .social-btn:hover i {
    transform: scale(1.3);
    color: #ff5722;
}
footer .social-btn::before {
    content: "";
    position: absolute;
    width: 120%;
    height: 120%;
    background: #ffffff;
    transform: rotate(45deg);
    left: -110%;
    top: 90%;
}
footer .social-btn:hover::before {
    animation: effect 0.6s 1;
    top: -10%;
    left: -10%;
}
footer p a {
    color: #ff5722;
}

/*-- Hover Animation Effect --*/
@keyframes effect {
    0% {
        left: -120%;
        top: 100%;
    }
    50% {
        left: 10%;
        top: -30%;
    }
    100% {
        top: -10%;
        left: -10%;
    }
}


/*-- Footer Responsive CSS --*/
@media (max-width: 576px){
footer .social-btn {
    width: 40px;
    height: 40px;
    margin: 5px;
}
footer .social-btn i {
    line-height: 40px;
    font-size: 18px;
}
}
/*-- Footer CSS --*/
ul {
    margin: 0px;
    padding: 0px;
}
ul li {
    list-style: none;
}
ul li a {
    text-decoration: none;
    color: white;
    font-size: 16px;
    margin: 8px 0px;
    display: block;
}
</style>
</head>
<body>
	    <!-- Footer -->
    <footer>
	 <div class="container-fluid">
         <div class="row">
<div class="bg-dark pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="widget-title">
                    <h3 class="mb-4 fs-5 text-secondary text-uppercase">Customer support</h3>
                </div>
                <h4 class="text-success">+92-3058160900</h4>
                <p class="text-secondary m-0 mt-3">Mon. - Fri. <b>10:00 - 7:00</b></p>
                <p class="text-secondary">Sat. - Sun. <b>Off</b></p>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget-title">
                    <h3 class="mb-4 fs-5 text-secondary text-uppercase">About Shop</h3>
                </div>
                <ul>
                    <li><a href="\home">Home</a></li>
                    <li><a href="\product">Product</a></li>
                    <li><a href="\contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget-title">
                    <h3 class="mb-4 fs-5 text-secondary text-uppercase">Our services</h3>
                </div>
                <ul>
                    <li><a href="#">Payment</a></li>
                    <li><a href="#">Order tracking</a></li>
                    <li><a href="#">Exchanges & returns</a></li>
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Terms & conditions</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget-title">
                    <h3 class="mb-4 fs-5 text-secondary text-uppercase">Newsletter signup</h3>
                </div>
                <form class="row row-cols-lg-auto g-3 align-items-center" action="" method="POST">
                    <div class="col-12">
                        <label class="visually-hidden">E-mail</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                            <input type="text" name="email" class="form-control" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-success w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="social-links">
                        <a class="social-btn" href="https://web.facebook.com/rafaydigital">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="social-btn" href="https://www.instagram.com/invites/contact/?i=1rpzptmy8aeyv&utm_content=3f4w1y2">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="social-btn" href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a class="social-btn" href="#">
                            <i class="fab fa-google"></i>
                        </a>
                        <a class="social-btn" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Footer -->
    <div class="col-12">
        <p class="text-center text-white py-1 mt-5 bg-secondary">© Copyright 2022 Rafay Digital. All rights reserved.</p>
    </div>
</div> 
</footer>
<?php
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$query="insert into newsletter(email) values ('$email')";
	$run=mysqli_query($conn,$query);
	if($run){
		echo"<script>alert('You have been add to Newsletter.Thanks for joinng us')</script>";
	}else{
		echo"<script>alert('Error for adding in Newsletter.Sorry!!')</script>";
	}
}
?>
<script type="text/javascript">
    // jQuery counterUp
    $('[data-toggle="counterUp"]').counterUp({
        delay: 15,
        time: 1500
    });
</script>