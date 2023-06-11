<!DOCTYPE html>
<html>
<title>All Products</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="style4.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;*


    table{
			
            border: 4px solid #FF0000;
        }
       table, th  {
  border: 1px solid black;

}
        }

</style>
<style type="text/css">

    table{
			
            border: 4px solid #FF0000;
        }
       table, th  {
  border: 1px solid black;

}
        }

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

<div style="margin-left:16rem; font-size:36px; color:black;">    <img src="logo.png" alt="LOGO" style="height:100px;"></div>  

<!-- !PAGE CONTENT! -->
<!-- face mask -->

<div style="margin-left:15.2rem;margin-right:4rem;float:left;" >
<?php	
 $conn=mysqli_connect("localhost","root","","gifty");
    if (!$conn) 
	{
    die("Connection failed: " . mysqli_connect_error());
	}

 ?>
 

<h1>WELCOME ADMINISTRATOR !</h1>

<br><br><br>
 
 <p><b> Read Your messages : </b></p>
 <p>Pick the date :</p>

<form method='POST' action="execute3.php"> 

<br>
<input name="beg" type="date" style="width:50%;border:1px solid #ccc;font-family:'Muli-Bold';height: 40px;padding: 0 20px;border-radius: 20px;">
<br>

<button class="button" style="margin-left:310px;margin-top:20px; border: none;
  outline: 0;
  display: inline-block;
  padding: 10px;
  color: white;
  background-color:black;
  text-align: center;
  cursor: pointer;
  width:100px;
  border-radius: 25px;"> Display</button>
</form>
 

 
 
 
 <form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post">


<p><b> Add / Update a product </b></p>


<table style='width:50%;'>

<tr>
	<td>Product id : </td> <td><input type="text" name="id" size="20" maxlength="10" style="width:100%;border:1px solid #ccc;font-family:'Muli-Bold';height:30px;padding: 0 10px;border-radius: 15px;"/></td>
</tr>

<tr>
	<td>Category</td> 
<td>
<select name="cat" style="width:100%;border:1px solid #ccc;font-family:'Muli-Bold';height:30px;padding: 0 10px;border-radius: 15px;">
<option value="Face Masks"> face_mask</option>
<option value="pillow"> pillow</option>
<option value="flower Pot"> flower</option>
<option value="Glass Ball"> glass</option>
<option value="Man Clothes"> man</option>
<option value="Woman Clothes"> woman</option>
<option value="Beauty Products"> beauty</option>
<option value="Snacks"> snacks</option>
<option value="Shows Hoodies"> hoodie</option>
</select>
</td>
</tr>

<tr><td>Date Added: </td><td><input type="date" name="date" size="40" maxlength="10" style="width:100%;border:1px solid #ccc;font-family:'Muli-Bold';height:30px;padding: 0 10px;border-radius: 15px;" /></td></tr>
<tr>
	<td>Name</td> <td><input type="text" name="name" size="20" maxlength="10" style="width:100%;border:1px solid #ccc;font-family:'Muli-Bold';height:30px;padding: 0 10px;border-radius: 15px;"/></td>
</tr>
<tr>
	<td>Price</td> <td><input type="number_format" name="price" size="20" maxlength="10" style="width:100%;border:1px solid #ccc;font-family:'Muli-Bold';height:30px;padding: 0 10px;border-radius: 15px;"/></td>
</tr>
<tr>
	<td>Description</td> <td><input type="text" name="des" size="20" maxlength="10" style="width:100%;border:1px solid #ccc;font-family:'Muli-Bold';height:30px;padding: 0 10px;border-radius: 15px;"/></td>
</tr>
<tr>
	<td>Quantity</td> <td><input type="text" name="qn" size="20" maxlength="10" style="width:100%;border:1px solid #ccc;font-family:'Muli-Bold';height:30px;padding: 0 10px;border-radius: 15px;"/></td>
</tr>
<tr>
<td>Image </td> <td><input type="text" name="fileToUpload" style="width:100%;border:1px solid #ccc;font-family:'Muli-Bold';height:30px;padding: 0 10px;border-radius: 15px;"></td>
</tr>
<tr>
<td><input type="reset" value=" reset " style='border: none;
  outline: 0;
  display: inline-block;
  padding: 5px;
  color: white;
  background-color:black;
  text-align: center;
  cursor: pointer;
  width:50px;
  border-radius: 25px;
  margin-left:60%;'/></td>
<td><input type="submit" value="Save" style='border: none;
  outline: 0;
  display: inline-block;
  padding: 5px;
  color: white;
  background-color:black;
  text-align: center;
  cursor: pointer;
  width:50px;
  border-radius: 25px;
  margin-left:30%;'/></td>
</tr>
</table>
</fieldset>
</form>

<br><br><br>





 <form action= "cancel3.php" method="post">


<p><b> Delete a product </b></p>


<table style='width:50%;'>

<tr>
<td>Product id : </td> <td><input type="text" name="prod" size="20" maxlength="10" style="width:100%;border:1px solid #ccc;font-family:'Muli-Bold';height:30px;padding: 0 10px;border-radius: 15px;"/></td>
</tr>

<tr>
<td><input type="submit" value=" delete " style='border: none;
  outline: 0;
  display: inline-block;
  padding: 5px;
  color: white;
  background-color:black;
  text-align: center;
  cursor: pointer;
  width:50px;
  border-radius: 25px;
  margin-left:60%;'/></td>
<td></td>
</tr>
</table>

</form>
<br><br><br>












<section>
<form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<tr>
	<td><b>Selection how to show the Products :  <br></b></td> 
<td>
<select name="key" style="width:50%;border:1px solid #ccc;font-family:'Muli-Bold';height:30px;padding: 0 10px;border-radius: 15px;">
<option value="Product_ID"> Order by ID</option>
<option value="name"> Order by Name</option>
<option value="Price"> Order by Price</option>
<option value="Quantity"> Order by Quantity</option>
<option value="dateadded"> Order by Date aded</option>
<option value="category"> Order by Category</option>
</select>
</td>
</tr>
<td><input type="submit" value="Show"style='border: none;
  outline: 0;
  display: inline-block;
  padding: 5px;
  color: white;
  background-color:black;
  text-align: center;
  cursor: pointer;
  width:50px;
  border-radius: 25px;'/></td>
</form>
</section>

<br><br><br>

<section>
<form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<tr>
	<td><b>Selection how to show the Boxes :<br> </b></td> 
<td>
<select name="keys" style="width:50%;border:1px solid #ccc;font-family:'Muli-Bold';height:30px;padding: 0 10px;border-radius: 15px;">
<option value="box_id"> Order by ID</option>
<option value="bprice	"> Order by price</option>
<option value="bname"> Order by Name</option>
<option value="bdate"> Order by Date aded</option>
<option value="bquantity"> Order by Quantity</option>
</select>
</td>
</tr>
<td><input type="submit" value="Show" style='border: none;
  outline: 0;
  display: inline-block;
  padding: 5px;
  color: white;
  background-color:black;
  text-align: center;
  cursor: pointer;
  width:50px;
  border-radius: 25px;'/></td>
</form>

</section>

<?php
if(!empty($_POST['id']) AND !empty($_POST['cat']) AND !empty($_POST['date']) AND !empty($_POST['name']) AND !empty($_POST['price']) AND !empty($_POST['des']) )
{
 $PID=$_POST['id'];
 $category=$_POST['cat'];
 $date=$_POST['date'];
 $name=$_POST['name'];
 $price=$_POST['price'];
 $desc=$_POST['des'];
 $qn=$_POST['qn'];
// SQL query
$query="SELECT Product_ID FROM product WHERE Product_ID='$PID'";
$result=mysqli_query($conn,$query);

if (mysqli_num_rows($result) == 0)
	{
	 	 $request="INSERT INTO product (Product_ID, Name, Price, Category, description,  dateadded, quantity) VALUES('$PID','$name','$price','$category','$desc','$date','$qn')";
		 $res=mysqli_query($conn,$request);
		 //if the insertion is done
		 if ($res)
			{
			 echo "<script> alert('new Product saved')</script>";
			}
			 else 
			 {
				echo "<script> alert('Problem when inserting Product') </script>";
			 }
	}
	
	else
	{	 
		$request="UPDATE product SET Product_ID	='$PID',Name='$name',Category='$category',description='$desc',dateadded='$date', Price='$price', quantity='$qn' WHERE Product_ID='$PID'";
		 $res=mysqli_query($conn,$request);
		 //if the update is done
		 if ($res)
		 {
		    echo "<script> alert('Product updated')</script>";}
		 else 
		 {
			 echo "<script> alert('Problem when updating Product') </script>";
		}
	}
}

if(!empty($_POST['key']))
{
 $key=$_POST['key'];

//selecting the table to display
$req = "SELECT * FROM product ORDER BY $key";
$res = mysqli_query($conn,$req);
if (mysqli_num_rows($res) > 0)
{
echo"The list of Products:";
// display the rows of the table
echo "<table><tr><th>Product ID</th><th>Name</th><th>Price</th><th>Category</th><th>image</th><th>Description</th><th>rating</th><th>dateadded</th><th>quantity</th></tr>";
While($line = $res->fetch_assoc())
{
echo "<tr><th>".$line["Product_ID"]."<th>".$line["Name"]."<th>".$line["Price"]."<th> ".$line["Category"]."<th>".$line["image"]."<th>".$line["description"]."<th>".$line["rating"]."<th>".$line["dateadded"]."<th>".$line["quantity"];
}
}
// incase the table was empty
else {echo "0 results";}
}
else{
if(!empty($_POST['keys']))
{
 $keys=$_POST['keys'];
//selecting the table to display
$req = "SELECT * FROM box ORDER BY $keys";
$res = mysqli_query($conn,$req);
if (mysqli_num_rows($res) > 0)
{
echo"The list of Boxes:";
// display the rows of the table
echo "<table><tr><th>box_id</th><th>Box_Name</th><th>Price</th><th>Category</th><th>image</th><th>Description</th><th>rating</th><th>bdate</th><th>bquantity</th></tr>";
While($line = $res->fetch_assoc())
{
echo "<tr><th>".$line["box_id"]."<th>".$line["bname"]."<th>".$line["bprice"]."<th> ".$line["category"]."<th>".$line["image"]."<th>".$line["descri"]."<th>".$line["brating"]."<th>".$line["bdate"]."<th>".$line["bquantity"];
}
}
// incase the table was empty
else {echo "0 results";}}
}
?>




</div>
</body>
</html>