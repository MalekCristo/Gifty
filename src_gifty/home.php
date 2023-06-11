<!DOCTYPE HTML>
<script defer src="theme.js"></script>


<html>
<title>
Home
</title>
<body>
  <link rel="stylesheet" href="home.css" />

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
   <a href="home.php"><img src="logo.png" style="width:15%; margin-left:5rem;padding-left:30px;"></img></a>

 <button class="open-button" onclick="openForm()" >Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1 style="text-align:center">Chat</h1>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
  </div>


   <!-- Slideshow container -->

<div class="S1" style="float:left;position:absolute;float:left;width:100%;height:650px;">

 <div class="slideshow-container">
<div class="mySlides fade">
     <img src="-3.jpg" style="width:100%; height:650px;">

  </div>

<div class="slideshow-container">
<div class="mySlides fade">
     <img src="-11.jpg" style="width:100%; height:650px;">

  </div>

  <div class="mySlides fade">

    <img src="-2.jpg" style="width:100%; height:650px;">

  </div>

</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div style="margin-top:40em;">
<div>
<div style="text-align:center; font-size:40px;color:#00e699;position:relative;width:100%;">
New Arrivals
<br>
<br>

</div>

</div>

  <!-- The grid: four columns -->
<div class="row" style="margin-left:100px;float:left;position:relative;width:90%;">
  <div  class='column'>
    <img src="-7.jpg" alt="Nature" onclick="myFunction(this);" style='width:90%'>
  </div>
  <div class="column">
    <img src="-6.jpg" alt="Snow" onclick="myFunction(this);" style='width:90%'>
  </div>
  <div class="column">
    <img src="-13.jpg" alt="Mountains" onclick="myFunction(this);" style='width:90%'>
  </div>
  <div class="column">
    <img src="-5.jpg" alt="Lights" onclick="myFunction(this);" style='width:90%'>
  </div>
</div>
</div>
<!-- The expanding image container -->
<div class="container">
  <!-- Close the image -->
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

  <!-- Expanded image -->
  <img id="expandedImg" style="width:90%;margin-left:100px; height:20%">

  <!-- Image text -->
  <div id="imgtext"></div>
</div>
  <br><br>

 <br>
 <br>

<div class="S5">
<hr>
<div style="text-align:center;">
<a href="#" ><img src="fb.png" style="height:40px;width:35px;"></a>
<a href="#" ><img src="twitter.png" style="height:42px;width:56px;"></a>
<a href="#" ><img src="linkedin.png" style="height:42px;width:42px;"></a>
<a href="#" ><img src="instagram.png" style="height:42px;width:42px;"></a>
<a href="#" ><img src="pinterest.png" style="height:42px;width:42px;"></a>
</div>
</div>
  <br>
</body>
</html>
<script>



function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
var slideIndex = 0;
showSlides();



function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the image text
  var imgText = document.getElementById("imgtext");
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;
  // Use the value of the alt attribute of the clickable image as text inside the expanded image
  imgText.innerHTML = imgs.alt;
  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
}

</script>
