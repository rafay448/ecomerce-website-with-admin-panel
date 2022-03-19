<?php include('../includes/menu.php'); ?>
<head>
<title>Product</title>
</head>
<body>
<div class="container shadow"><br>
        <div class="row">
		<div class="col-sm-10 offset-sm-1">
<?php
error_reporting(0);
$query = "select * from product";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
echo $result['prd_name'];
echo $result['prd_price'];
echo $result['prd_des'];
if($total!=0){
	while($result=mysqli_fetch_array($data))
	{
		?>
        <img src="\admin/product/<?php echo $result['prd_img']; ?>" style='width:70%; height:350px;' class='responsive shadow pt-5'><br />
		<?php
		echo "<h3>".$result['prd_name']."</h3><br>";
		echo "<h6>".$result['prd_des']."</h6><br />";
		echo "PKR :".$result['prd_price']."<br />";
		?>
		<?php
		echo"<a href ='checkout.php?name=$result[prd_name]& price=$result[prd_price] & des=$result[prd_des]' class='btn btn-success'>Buy Now</a>"."<br /><hr>";
		?>
<?php
	}
}
?>
       </div>
</div>
</div>
<?php
include('../includes/footer.php');
?>