

<?php
session_start();
    if(!isset($_SESSION['email']))
    {
     
        header("location:Loginsignup.php");
    }
$email=$_SESSION['email'];
?>

<?php

 $conn=mysqli_connect("localhost","root","","gifty");
    if (!$conn) 
	{
    die("Connection failed: " . mysqli_connect_error());
	}





if(!empty($_POST['Name']) AND !empty($_POST['Lastname']) AND !empty($_POST['phone']) AND !empty($_POST['Adress']) AND !empty($_POST['Birthday']))
{

 $lname=$_POST['Lastname'];
 $phone=$_POST['phone'];
 $name=$_POST['Name'];
 $birth=$_POST['Birthday'];
 $address=$_POST['Adress'];
echo "$birth";
// SQL query
$query="SELECT * FROM customer WHERE email='$email'";
$result=mysqli_query($conn,$query);


if (mysqli_num_rows($result)> 0)
	{	
		$line=mysqli_fetch_assoc($result);
		$pass=$line['password'];
		$id=$line['customer_ID'];
		
		
		$request="UPDATE customer
		SET customer_ID='$id', email='$email', Name='$name',Lastname='$lname', password='$pass',adress='$address', birthday=$birth, phone='$phone' WHERE email='$email'";
		 $res=mysqli_query($conn,$request);
		 //if the update is done
		 if ($res)
		 {
		    echo "<script> alert('Profile updated')</script>";}
		 else 
		 {
			 echo "<script> alert('Problem when updating Profile') </script>";
		}
	}

}

?>