
<!DOCTYPE html>
<html>
<title>BOX </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="stylesheet" href="style22.css">
</head>

<?php
   

    if(isset($_SESSION['email']))
    {
        echo ' Well Come ' . $_SESSION['email'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:Loginsignup.php");
    }

?>

<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM box WHERE box_id= ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        die ('Product does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    die ('Product does not exist!');
}
?>


<?=template_header('BOX')?>

<?php 

$image=$product['image'];
$name=$product['bname'];
$description=$product['descri'];
$id=$product['box_id'];
$quantity=$product['bquantity'];
$price=$product['bprice'];




?>

<div class="product content-wrapper">
    <img src="<?=$image?>" width="500" height="500" alt="<?=$name?>">
    <div>
        <h1 class="name"><?=$name?></h1>
		
        <span class="price">
            <?=$price?> TND
        </span>
		<div class="description">
            <?=$description?>
        </div>
        <form action="ind.php?page=sub" method="post">
            <input type="hidden" name="box_id" value="<?=$id?>">
			<input type="hidden" name="name" value="<?=$name?>">
			<input type="hidden" name="price" value="<?=$price?>">
			Get a box every :
				<select name="period"  style="width:40%">
				<option value="Month"> Month</option>
				<option value="Two months"> Two months</option>
				<option value="Three months"> Three Months</option>
				</select>
			
			Do you want to get your box wrapped ? : 
			<select name="wrap" style="width:40%">
				<option value="Yes">Yes</option>
				<option value="No"> No</option>
				</select>
			<br> <br>
            <input type="submit" value="Subscribe" style="background:black;">
        </form>
       
    </div>
</div>






</body>
</html>














