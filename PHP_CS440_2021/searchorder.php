<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Order Info Lookup</title>
</head>
<body><table><tr><td>
<table  align="left" cellspacing="5" cellpadding="8"><tr>
<tr><form method = "POST" action ="ordersearched.php">
<td><input type = "text" name = "input" placeholder = "Enter Order ID or Email"/></td><td>
<input type = "submit" name = "submit" value = "Search"/></td>
</form>
<form method = "POST" action ="index.php">
<td><input type = "submit" value="Go back to main menu"/>
</td></tr></form></table></td></tr><tr><td>
<table  align="left" cellspacing="5" cellpadding="8"><tr>
<td align="left"><b>Order ID</b></td>
<td align="left"><b>Customer ID</b></td>
<td align="left"><b>Email</b></td>
<td align="left"><b>Address</b></td>
<td align="left"><b>Phone</b></td>
<td align="left"><b>Product ID</b></td>
<td align="left"><b>Quantity</b></td>
<td align="left"><b>Total Cost</b></td>
</tr></table></td></tr></table>
</body>
</html>