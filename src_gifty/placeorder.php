
<?php
   

    if(!isset($_SESSION['email']))
    {
     
        header("location:Loginsignup.php");
    }
$email=$_SESSION['email'];
?>



<?=template_header('Order')?>


<?php


$conn=mysqli_connect("localhost","root","","gifty");
    if (!$conn) 
	{
    die("Connection failed: " . mysqli_connect_error());
	}

echo "<br>";

if( isset($_SESSION['cart']))
{
$req="SELECT * FROM customer WHERE email='$email'";
$query=mysqli_query($conn,$req);
if ($query)
{
	$line=mysqli_fetch_assoc($query);
	$cid=$line['customer_ID'];
	$adress=$line['adress'];
}
	
echo"
<div style='margin-left:30%';>
<b>Invoice: <br></b>
Your email : $email <br>
Your address: $adress <br>
</div>";
foreach ($_SESSION['cart'] as $key=>$value)
{
	

	
$req="SELECT * FROM product WHERE Product_ID='$key'";
$query=mysqli_query($conn,$req);
if ($query)
{
	$line=mysqli_fetch_assoc($query);
	$uprice=$line['Price'];
}


$total = $uprice * $value;
	

	
	 $request="INSERT INTO
		 orders (totprice, customer_ID, Product_ID) 
		 VALUES('$total','$cid','$key')";
		 $res=mysqli_query($conn,$request);
		 //if the insertion is done
		 if ($res)
			{
			 echo "<script> alert('You are subscribed !')</script>";
			}
			 else 
			 {
				echo "<script> alert('Problem when subscribing') </script>";
			 }
			 
echo "
<div style='margin-left:30%';>
Product_ID : $key <br>
Quantity : $value <br>
Total Price : $total <br> <br> <br>
</div>
";
	
}
}

echo "<div style='margin-left:30%';><br><b>If you didn't include your address your order will be lost ! please complete your profile</b></div>";




?>