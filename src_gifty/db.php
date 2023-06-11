<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL detail   
   $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'gifty';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	die ('Failed to connect to database!');
    }
}



// Template header
function template_header($title) {
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style22.css" rel="stylesheet" type="text/css">
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
	
 

        <header>
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

				
				 <div class="content-wrapper">
				  <div style="margin-left:7rem; font-size:36px; color:black;">    <img src="logo.png" alt="LOGO" style="height:100px;"></div>  
				  <br>
     
               
                <div class="link-icons">
                    <a href="ind.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
						<span>$num_items_in_cart</span>
					</a>
                </div>
            </div>
        </header>
        <main>
EOT;
}	
?>