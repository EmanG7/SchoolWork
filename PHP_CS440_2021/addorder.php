<html>
<style>
.row { display: flex; align: center; }
.column { flex: 33%; padding-left: auto;  padding-right: auto; margin-top: 10px; margin-bottom: 10px;}
</style>
<head>
<title>Add Order</title>
</head>
<body>
<form action="orderadded.php" method="post">
<h3>Add a New Order</h3>
<table><tr class = "row">
<td class = "column"><label>Order ID:</label></td>
<td class = "column">
<?php
require_once('mysqli_connect.php');
$id = $dbc->query("SELECT order_ID FROM orders ORDER BY order_ID DESC LIMIT 1");
$row = mysqli_fetch_array($id);
echo '<input size="30" value="' . $row['order_ID'] + 1 .
'" disabled><input type="hidden" name="oid" size="30" value="' . 
$row['order_ID'] + 1 . '">';
mysqli_close($dbc);
?>
</td>
</tr><tr class = "row">
<td class = "column"><label>Customer ID:</label></td>
<td class = "column"><input type="text" name="cid" size="30" value="" /></td>
</tr><tr class = "row">
<td class = "column"><label>Email:</label></td>
<td class = "column"><input type="text" name="email" size="30" value="" /></td>
</tr><tr class = "row">
<td class = "column"><label>Address:</label></td>
<td class = "column"><input type="text" name="address" size="30" value="" /></td>
</tr><tr class = "row">
<td class = "column"><label>Phone Number:</label></td>
<td class = "column"><input type="text" name="phone" size="30" value="" /></td>
</tr><tr class = "row">
<td class = "column"><label>Product ID:</label></td>
<td class = "column"><input type="text" name="pid" size="30" value="" /></td>
</tr><tr class = "row">
<td class = "column"><label>Quantity:</label></td>
<td class = "column"><input type="text" name="quantity" size="30" value="" /></td>
</tr><tr class = "row">
<td class = "column"></td>
<td class = "column"><input type="submit" name="submit" value="Add Order" /></td>
</tr></table>
</form>
</body>
</html>