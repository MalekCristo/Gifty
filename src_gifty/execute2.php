
<?php

$con = mysqli_connect("localhost","root","","gifty");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}



if(!empty($_POST['fname']) AND !empty($_POST['lname']) AND !empty($_POST['email']) AND !empty($_POST['phonenum'])AND !empty($_POST['message'])AND !empty($_POST['date']))
{
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $phone=$_POST['phonenum'];
 $date=$_POST['date'];
 $message=$_POST['message'];
 $email=$_POST['email'];
 

// SQL query



	 	 $request="INSERT INTO contact VALUES('$fname','$lname','$email','$phone','$message','$date')";
		 $res=mysqli_query($con,$request);
		 //if the insertion is done
		 if ($res)
			{
			 echo "<script> alert('message sent')</script>";
			}
			 else
			 {
				 echo "<script> alert('Problem when sending your message') </script>";
			 }
	}

else
{
echo "<script type=\"text/javascript\"> alert('Please fill the form!')</script>";
}



?>