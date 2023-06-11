<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script defer src="theme.js"></script>
  <link rel="stylesheet" href="Loginsignup.css" />
    <link rel="stylesheet" href="home.css" />
  <script src="Loginsignup.js"></script>

  </head>
<?php
// intializing variables

//connceting the database
$conn=mysqli_connect("localhost","root","", "gifty");
//checking the connection
if (!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}

//assigning form values to the variables

if( !empty($_POST['email']) AND !empty($_POST['pass']) AND !empty($_POST['cpass']))
{

 $emaill=$_POST['email'];
 $passs=$_POST['pass'];
 $cpasss=$_POST['cpass'];

// SQL query
$query="SELECT email FROM customer WHERE email='$emaill'";
$result=mysqli_query($conn,$query);

if (mysqli_num_rows($result) == 0)
	{
		
		if ($passs==$cpasss)
		{
		
	 	 $request="INSERT INTO customer (email, password)VALUES('$emaill','$passs')";
		 $res=mysqli_query($conn,$request);
		 //if the insertion is done
		 if ($res)
			{
			 echo "<script> alert('Registered !')</script>";
			}
			 else
			 {
				 echo "Problem when registering";
				 echo "<br>";
				 echo $idd;
				 echo "<br>";
				 echo $emaill;
				 echo "<br>";
				 echo $passs;
				 echo "<br>";
				 echo $cpasss;
				 echo "<br>";
			 }
		}
		else { echo "<p style='margin-left:20%;'>Please check your password confirmation</p>";}
	}
	else { echo "<p style='margin-left:20%;'>The address is already used please login !<p>";}

}
mysqli_close($conn);


?>
<?php
    $con=mysqli_connect('localhost','root','','gifty');
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
   
session_start();
$email=$pass="";
  if(!empty($_POST['emaillog']) AND !empty($_POST['passwordlog']))
    {
           $email=$_POST['emaillog'];
            $pass=$_POST['passwordlog'];
            $query="select * from customer WHERE email='$email' and password='$pass'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['email']=$_POST['emaillog'];
                header("location:home.php");
            }
            else
            {
                header("location:Loginsignup.php?Invalid= Please Enter Correct User Name and Password ");
            }

     }
    else
    {
      
        echo $email;
        echo $pass;
    }

?>

<title>Login-Sign up</title>
<body>

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



<section class="forms-section">
  <div style="margin-left:1rem; margin-top:3%;font-size:36px; color:black;">    <a href="home.php"><img src="logo.png" alt="LOGO" style="height:50px;"></a></div>
  <h1 class="section-title">Hello, Welcome to our Store!</h1>
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login" style="font-size:25px">
        Login
        <span class="underline"></span>
      </button>
      <form method="post" action= "<?php echo $_SERVER['PHP_SELF'];?>" class="form form-login">
        <fieldset>
          <legend>Please, enter your email and password for login.</legend>
          <div class="input-block">
            <label for="login-email">E-mail</label>
            <input id="login-email" name="emaillog" placeholder="example@gmail.com" required>
          </div>

          <div class="input-block">
            <label for="login-password">Password</label>
            <input name="passwordlog"id="login-password" type="password" required>
          </div>
          <div class="input-block">
              <button type="button" class="switcher switcher-login" style="font-size:25px" name="Login"></button>
          </div>
		 
        </fieldset>
        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup" style="font-size:25px">
        Sign Up
        <span class="underline"></span>
      </button>
      <form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form form-signup">
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
         
		  <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input name="email"  id="signup-email" type="email" placeholder="example@gmail.com" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Password</label>
            <input name="pass" id="signup-password" type="password" required>
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Confirm password</label>
            <input name="cpass" id="signup-password-confirm" type="password" required>
          </div>
        </fieldset>
        <input type="submit" name="submit" value="Submit">
      </form>
    </div>
  </div>
</section>
<script>
const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})
</script>
</body>
