<!DOCTYPE html>
<html>
<title>Get your box</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="card.css">
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

  
  
  <?php
 $con=mysqli_connect("localhost","root","","gifty");
    if (!$con)
	{
    die("Connection failed: " . mysqli_connect_error());
	}
 $request="SELECT DISTINCT category FROM box ";
 $result=mysqli_query($con,$request);

 $option='';
 while($line=mysqli_fetch_assoc($result))
 {
 $option.= "<option value=\"".$line['category']."\">".$line['category']."</option>";


 }
 ?>
  
  
  
  <!-- Top menu on small screens -->

<div style="margin-left:16rem; font-size:36px; color:black;">   <a href="home.php"> <img src="logo.png" alt="LOGO" style="height:100px;"></a> </div>  
<div style="margin-left:30%">
 <p><h4 style="font-family:'Muli-Bold'">Choose :</h4></p>

 <form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<table>
<tr><td><h6 style="font-family:'Muli-Bold'">Category : </h6></td></tr>
<tr><td><select name="cat" style="width:500px;  border: 1px solid #ccc;
  display: block;
  height: 40px;
  padding: 0 20px;
  border-radius: 5px;
  font-family: 'Muli-Bold';
  background: none; 
 ">
  <?php echo $option; ?>

 </select></tr>

<tr>
<td style='padding-top:5%'><input type="submit" value="Select" style="border: none;
  margin-left:390px;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
 font-family:'Muli-Bold';
  background-color:black;
  text-align: center;
  cursor: pointer;
  width:100px;
  border-radius: 7px;"/></td>
</tr>
</table>
</form>
</div>

<?php
$choice=$_POST['cat'];

 $query="SELECT * FROM box WHERE category='$choice'";
 $res=mysqli_query($con,$query);

echo "<div style='margin-left:40px;'>"; 
 if (mysqli_num_rows($res)>0)
 {
 while($line=mysqli_fetch_assoc($res))
 {	$img=$line["image"];
	$nam=$line["bname"];
	$price=$line["bprice"];
	$id=$line["box_id"];
	$descri=$line["descri"];
	$quantity=$line["bquantity"];
	$category=$line["category"];
echo"<form method='POST' action='ind.php?page=ex&id=$id'>";
echo "<div class='card'>
 
  <img src='$img' style='width:100%'>
  <h1>$nam</h1>
  <p class='price'>$price TND</p>

<input id='but' type='submit' value='Subscribe' style='border: none;
  '>
</form>
</div>";

 }

 
 }
echo "</div>";
 
 

?>



</body>
</html>
