<html>
<head>
<title>Add Product</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
$data_missing = array();
if(empty($_POST['id'])){
// Adds name to array
$data_missing[] = 'Product ID';
} else {
// Trim white space from the name and store the name
$id = intval(trim($_POST['id']));
}
if(empty($_POST['product_name'])){
// Adds name to array
$data_missing[] = 'Product Name';
} else {
// Trim white space from the name and store the name
$pname = trim($_POST['product_name']);
}
if(empty($_POST['quantity'])){
// Adds name to array
$data_missing[] = 'Quantity';
} else{
// Trim white space from the name and store the name
$quantity = trim($_POST['quantity']);
}
if(empty($_POST['individual_cost'])){
// Adds name to array
$data_missing[] = 'Individual Cost';
} else {
// Trim white space from the name and store the name
$cost = trim($_POST['individual_cost']);
}
if(empty($data_missing)){
require_once('mysqli_connect.php');
$sql = 'INSERT INTO stock(product_id, product_name, quantity, individual_cost)
VALUES (?, ?, ?, ?)';
$stmt = $dbc->prepare($sql);
$stmt->bind_param("isid", $id, $pname, $quantity, $cost);
$stmt->execute();
$affected_rows = mysqli_stmt_affected_rows($stmt);
if($affected_rows == 1){
echo 'Product Entered';
mysqli_stmt_close($stmt);
mysqli_close($dbc);
echo '<form action="productadded.php" method="post">
<b>Add a New Product</b>
<p>Product ID:
<input size = "30" value="' . $id + 1 . '" disabled>
<input type="hidden" name="id" size="30" value="' . $id + 1 . '">
</p>
<p>Product Name:
<input type="text" name="product_name" size="30" value="" />
</p>
<p>Quantity:
<input type="text" name="quantity" size="30" value="" />
</p>
<p>Individual Cost:
<input type="text" name="individual_cost" size="30" value="" />
</p>
<p>
<input type="submit" name="submit" value="Add Product" />
</p>
</form>';
} else {
echo 'Error Occurred<br />';
echo mysqli_error();
mysqli_stmt_close($stmt);
mysqli_close($dbc);
}
} else {
echo 'You need to enter the following data<br />';
foreach($data_missing as $missing){
echo "$missing<br />";
}
}
}
?>
<form method = "POST" action ="index.php">
<input type = "submit" value="Go back to main menu"/>
</form>