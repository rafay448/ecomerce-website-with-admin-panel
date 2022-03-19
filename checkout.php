<?php
include('../includes/menu.php');
$name = $_GET['name'];
$price = $_GET['price'];
$des = $_GET['des'];
?>
<title>Checkout</title>
<div class="container p-5">
    <div class="row">
	  <div class="col">
	    <form action="" method="POST">
	    <input value="<?php echo 'Product Name : '; echo $name; ?>" disabled class="form-control">
	    <input value="<?php echo 'Product Price : '; echo $price; ?>" disabled class="form-control">
	    <textarea disabled class="form-control">Product Description :<?php echo $des; ?></textarea>
		<input name ="customer_name" value="<?php echo $_SESSION['first_name'];echo $_SESSION['last_name']; ?>" disabled class="form-control" />
        <div class="form-floating">
		<input type="number" name="quantity" id="quantity" placeholder="Enter Product quantity" class="form-control" required /> 
		<label for="quantity">Product quantity</label>
        </div>
		<div class="form-floating">
		<input type="text" name="adress" id="adress" placeholder="adress" class="form-control" required /> 
		<label for="adress">Street :</label>
        </div>
		<div class="form-floating">
		<input type="text" name="city" id="adress" placeholder="adress" class="form-control" required /> 
		<label for="adress">City :</label>
        </div>
		<div class="form-floating">
		<input type="text" name="tehsil" id="adress" placeholder="adress" class="form-control" required /> 
		<label for="adress">Tehsil :</label>
        </div>
		<select name="state" class="form-control">
		<optgroup label="Select State">
		<option>Punjab</option>
		<option>Sind</option>
		<option>Balochistan</option>
		<option>Kpk</option>
		<option>AJK</option>
		</optgroup>
		</select>
        </div>
		</div>
		<input name="buy" value="Buy Now" placeholder="Buy now" type="submit" class="btn btn-danger" />
		</form>
</div>
<?php
if(isset($_POST['buy'])){
	$quantity=$_POST['quantity'];
	if($quantity>0){
		$adress=$_POST['adress'];
		$tehsil=$_POST['tehsil'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$customer_name=$_SESSION['first_name'].$_SESSION['last_name'];
		$total=$quantity * $price;
		$query="insert into orders(prd_name, prd_price,prd_quantity, total_price,customer_name, adress, city, tehsil, state) values('$name','$price','$quantity', '$total','$customer_name', '$adress', '$city', '$tehsil', '$state')";
		$run = mysqli_query($conn,$query);
		if($run){
			echo"<script>alert('Your Order of $name with the value of $total has been received')</script>";
		}else{
			echo"<script>alert('error')</script>";
		}
	}else{
		echo"<script>alert('You have enter wrong Quantity $quantity')</script>";
	}
}
?>