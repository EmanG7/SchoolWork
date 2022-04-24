<html>
<style>
.row { display: flex; align: center; }
.column { flex: 33%; padding-left: auto;  padding-right: auto; margin-top: 10px; margin-bottom: 10px;}
</style>
<head>
<title>Add Customer</title>
</head>
<body>
<form action="customeradded.php" method="post">
<h3>Add a New Customer</h3>
<table><tr class = "row">
<td class = "column"><label>Customer_ID:</label></td>
<td class = "column">
<?php
require_once('mysqli_connect.php');
$id = $dbc->query("SELECT customer_id FROM customer ORDER BY customer_id DESC LIMIT 1");
$row = mysqli_fetch_array($id);
echo '<input size="30" value="' . $row['customer_id'] + 1 .
'" disabled><input type="hidden" name="id" size="30" value="' . 
$row['customer_id'] + 1 . '">';
mysqli_close($dbc);
?>
</td>
</tr><tr class = "row">
<td class = "column"><label>First Name:</label></td>
<td class = "column"><input type="text" name="first_name" size="30" value="" /></td>
</tr><tr class = "row">
<td class = "column"><label>Last Name:</label></td>
<td class = "column"><input type="text" name="last_name" size="30" value="" /></td>
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
<td class = "column"></td>
<td class = "column"><input type="submit" name="submit" value="Add Student" /></td>
</tr></table>
</form>
</body>
</html>