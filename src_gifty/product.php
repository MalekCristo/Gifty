<!DOCTYPE html>
<html>
<title>Product</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="stylesheet" href="style22.css">
</head>
<script defer src="theme.js"></script>
<?php
  
    if(!isset($_SESSION['email']))
    {
    
        header("location:Loginsignup.php");
    }

?>

<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM product WHERE Product_ID= ?');
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

<?=template_header('Product')?>

<?php 

$image=$product['image'];
$name=$product['Name'];
$description=$product['description'];
$id=$product['Product_ID'];
$quantity=$product['quantity'];
$price=$product['Price'];
?>

<div class="product content-wrapper">
    <img src="<?=$image?>" width="500" height="500" alt="<?=$name?>">
    <div>
        <h1 class="name"><?=$name?></h1>
        <span class="price">
            <?=$price?> TND
        </span>
        <form action="ind.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$quantity?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$id?>">
            <input type="submit" value="Add To Cart" style="background:black;">
        </form>
        <div class="description">
            <?=$description?>
        </div>
    </div>
</div>












</body>
</html>