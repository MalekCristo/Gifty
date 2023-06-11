<html>
<title>Messages</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style4.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;*


</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
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

  <!-- Top menu on small screens -->

<div style="margin-left:16rem; font-size:36px; color:black;"> <a href="home.php">   <img src="logo.png" alt="LOGO" style="height:100px;"></a></div>  
<style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400);

.container {
    width: 1000px;
    padding:10px;
}

.message-blue {
    position: relative;
	float:left;
    margin-left:20%;
    margin-bottom: 20px;
    padding: 50px;
    background-color: #00cc8b;
    width: 40%;
    height: 30%;
    text-align: left;
    font: 400 .9em  'Muli-Bold';
    border: 1px solid #00cc8b;
    border-radius: 10px;
}


.message-content {
    font-size:17px;
    margin: 0;
}

.message-timestamp-right {
    position: absolute;
    font-size: .85em;
    font-weight: 300;
    bottom: 5px;
    right: 5px;
}

.message-timestamp-left {
    position: absolute;
    font-size: .85em;
    font-weight: 300;
    bottom: 5px;
    left: 5px;
}

.message-blue:after {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-top: 15px solid #00cc8b;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    top: 0;
    left: -15px;
}

.message-blue:before {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-top: 17px solid #00cc8b;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    top: -1px;
    left: -17px;
}




</style>
<?php 

$con = mysqli_connect("localhost","root","","gifty");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}



if(!empty($_POST['beg']))
{
 
 $beg=$_POST['beg'];

// SQL query
	echo"<br><br><br><h5 style='margin-left:10%;'>Messages of the $beg :</h5> <br>";
	 	 $request="SELECT * FROM contact WHERE date LIKE '%".$beg."%'";
		 $res=mysqli_query($con,$request);
	
	if (mysqli_num_rows($res)>0)
	{echo"<table>";
		while($line=mysqli_fetch_assoc($res))
			
		{	
			$message=$line['message'];
			$email=$line['email'];
			$fname=$line['fname'];
			$lname=$line['lname'];
			$phone=$line['phone'];
			$date=$line['date'];
			

	echo"
	<tr> <td>
	<div class='container'>
    <div class='message-blue'>
        <p class='message-content' >
		From : $fname $lname <br>
		Email : $email <br>
		<br>
		$message
		</p>
        <div class='message-timestamp-left'>MSG $date</div>
    </div></td><tr>";
			
		}
	echo "</table>";
		}
	
	else{
echo "<script type=\"text/javascript\"> alert('No message during this period!')</script>";
}
}
else
{
echo "<script type=\"text/javascript\"> alert('Please fill the form!')</script>";
}


?>








