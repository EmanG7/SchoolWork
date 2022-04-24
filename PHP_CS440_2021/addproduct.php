<html>
<style>
.row { display: flex; align: center; }
.column { flex: 33%; padding-left: auto;  padding-right: auto; margin-top: 10px; margin-bottom: 10px;}
</style>
<head>
<title>Add Product</title>
</head>
<body>
<form action="productadded.php" method="post">
<h3>Add a New Product</h3>
<table><tr class = "row">
<td class = "column"><label>Product ID:</label></td>
<td class = "column">
<?php
require_once('mysqli_connect.php');
$id = $dbc->query("SELECT product_id FROM stock ORDER BY product_id DESC LIMIT 1");
$row = mysqli_fetch_array($id);
echo '<input size="30" value="' . $row['product_id'] + 1 .
'" disabled><input type="hidden" name="id" size="30" value="' . 
$row['product_id'] + 1 . '">';
mysqli_close($dbc);
?>
</td>
</tr><tr class = "row">
<td class = "column"><label>Product Name:</label></td>
<td class = "column"><input type="text" name="product_name" size="30" value="" /></td>
</tr><tr class = "row">
<td class = "column"><label>Quantity:</label></td>
<td class = "column"><input type="text" name="quantity" size="30" value="" /></td>
</tr><tr class = "row">
<td class = "column"><label>Individual Cost:</label></td>
<td class = "column"><input type="text" name="individual_cost" size="30" value="" /></td>
</tr><tr class = "row">
<td class = "column"></td>
<td class = "column"><input type="submit" name="submit" value="Add Product" /></td>
</tr></table>
</form>
</body>
</html>