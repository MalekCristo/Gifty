<!DOCTYPE HTML>
<script defer src="theme.js"></script>

<?php
session_start();
    if(!isset($_SESSION['email']))
    {
   
        header("location:Loginsignup.php");
    }

?>
<html>
<title>
Profile
</title>
<body>

  <link rel="stylesheet" href="home.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- Navigationbar     -->
  <nav class="navbar"style="z-index:10;">
  <ul class="navbar-nav">

      <li class="logo">
        <a href="home.php" class="nav-link">
          <span class="link-text logo-text">Home </span>
		  <!-- the svg are the icons of the menue -->
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="angle-double-right"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
            class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
        </a>
      </li>
	   <li class="nav-item">
        <a href="search.php" class="nav-link">
          <img src="2072119491582004497-128.png" style="height:50px; margin-left:10%;">
          <span class="link-text">Search</span>
        </a>
      </li> 
	  

     <li href="Loginsignup.php" class="nav-item">
        <a href="Loginsignup.php" class="nav-link">
          <img src="1657310781582004494-128.png" style="height:50px; margin-left:10%;">
		  
       
          <span class="link-text">Log in</span>
        </a>
      </li>
	  
	  
	   <li class="nav-item">
        <a href="profile.php" class="nav-link">
          <img src="1388560951582004484-128.png" style="height:50px; margin-left:10%;">
          <span class="link-text">Profile</span>
        </a>
      </li>
	  
	    

	  
      <li class="nav-item">
        <a href="shop.php" class="nav-link">
          <img src="7770838881582004485-128.png" style="height:50px; margin-left:10%;">
          <span class="link-text">Shop</span>
        </a>
      </li>


      <li class="nav-item">
        <a href="subscription box.php" class="nav-link">
		 <img src="2058381931582004487-128.png" style="height:50px; margin-left:10%;">
        
      
          <span class="link-text">Mystery Box</span>
        </a>
      </li>
     
	     <li class="nav-item">
        <button style='border:none; background:none;' ><a href="filling.php" class="nav-link">
		<img src="2252295991582004497-128.png" style="height:50px; margin-left:10%;">

          <span class="link-text">Manager's Space</span> 
        </a></button>
      </li>
	  
	  
      <li class="nav-item">
        <a href="logout.php" class="nav-link">
         <img src="8474278001582004491-128.png" style="height:50px; margin-left:10%;">
          <span class="link-text">Logout</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="about-us.php" class="nav-link">
		<img src="9468673611582004493-128.png" style="height:50px; margin-left:10%;">
        
          <span class="link-text">About Us</span>
        </a>
      </li>
    </ul>
  </nav>



  <!--chat-->

  <div style=" padding:15px;float:left; z-index:3;position:absolute;">
   <a href="home.php"><img src="logo.png" style="width:30%; margin-left:5rem;padding-left:30px;"></img></a>
   
   
   
   


<table style='margin-left:10rem;width:80%;'>
<tr><td>
 <h2 style="margin-left:20%;"> Your information !!</h2></td>
 <td>
   <form action='userform.php'>
<button class='button' style='margin-left:300%;margin-top:20px; border: none;
  outline: 0;
  display: inline-block;
  padding: 10px;
  color: white;
  background-color:black;
  text-align: center;
  cursor: pointer;
  width:100px;
  '> Edit Profile </button>
  </form></td></table>
<br><br><br>



<?php
$email=$_SESSION['email'];

// intializing variables

//connceting the database
$conn=mysqli_connect("localhost","root","", "gifty");
//checking the connection
if (!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}


$query="SELECT * FROM customer WHERE email='$email'";
$result=mysqli_query($conn,$query);
$line=mysqli_fetch_assoc($result);


 $name=$line['Name'];
 $lname=$line['Lastname'];
 $address=$line['adress'];
 $birth=$line['birthday'];
 $phone=$line['phone'];
 
 
 
 
 
 
echo "<div class='w3-container' style='margin-left:50%; width:100%;height:20%'>
  

  <div class='w3-card-4' style='width:70%'>
    <header class='w3-container w3-light-grey'>
      <h3>$name $lname</h3>
    </header>
    <div class='w3-container'>
      
      <img src='user.png' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:60px ; margin-top:30px;'>
      <p>Address : $address <br></p>
		<p>Birthday: $birth <br></p>
		<p style='margin-left:20%;'>phone: $phone <br></p>

    </div>

  </div>";
 
 
 
 
 



?>
<br><br><br>
<table style='margin-left:0%'>
<tr><td>
<h2> You are subscibed to: </h2></td>
<td>

</table>



<?php

$qu="SELECT * FROM customer WHERE email='$email'";
$res=mysqli_query($conn,$qu);


$row=mysqli_fetch_assoc($res);

$cid=$row['customer_ID'];


$que="SELECT * FROM customer NATURAL JOIN box_order NATURAL JOIN box WHERE box_order.customer_ID='$cid'";
$resu=mysqli_query($conn,$que);

if(mysqli_num_rows($resu)>0)
{   
	$i=0;
	while ($line=mysqli_fetch_assoc($resu))
	{
	$i++;
	$bname=$line['bname'];
	$bprice=$line['bprice'];
	$package=$line['package'];
	$Frequency=$line['frequency'];
	$border_id=$line['border_id'];
			echo " <b>
			<form method='POST' action='cancel.php'> 
			<input type='hidden' name='order' value='$border_id'>
			Box number $i</b> <br><br>
			Title : $bname <br>
			Price: $bprice TND <br>
			Every : $Frequency <br>
			Wrapped ? :$package <br>
			
			
			
	<button class='button' type='submit' style='margin-left:50%;margin-top:20px; border: none;
  outline: 0;
  display: inline-block;
  padding: 10px;
  
  color: white;
  background-color:black;
  text-align: center;
  cursor: pointer;
  width:100px;
  '> cancel </button> </form>
			";
			
		
	}

	
	
}

?>


<br><br><br>
<table style='margin-left:0%'>
<tr><td>
<h2> Your Orders: </h2></td>
<td>
</table>



<?php
$q="SELECT * FROM orders NATURAL JOIN product  WHERE customer_ID='$cid'";
$r=mysqli_query($conn,$q);
if (mysqli_num_rows($r)>0)
	
	{ $i=0;
while ($roww=mysqli_fetch_assoc($r))
{
	$i++;
	$price=$roww['totprice'];
	$date=$roww['date_acquired'];
	$name=$roww['Name'];
	$id=$roww['ORDER_id'];
	
			echo " 
			<form method='POST' action='cancel2.php'> 
			<input type='hidden' name='order' value='$id'>
			<br>Product number $i</b> <br>
			Title : $name <br>
			Price : $price TND <br>
			Date : $date <br>
					
		<button class='button' type='submit' style='margin-left:50%;margin-top:20px; border: none;
		outline: 0;
		display: inline-block;
		padding: 10px;
  
		color: white;
		background-color:black;
		text-align: center;
		cursor: pointer;
		width:100px;'> cancel </button>
		";
			
	
}

	}
?>














<?php mysqli_close($conn);?>
