<html>
<head>
<title>Add Order</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
$data_missing = array();
if(empty($_POST['oid'])){
// Adds name to array
$data_missing[] = 'Order ID';
} else {
// Trim white space from the name and store the name
$oid = intval(trim($_POST['oid']));
}
if(empty($_POST['cid']) && $_POST['cid'] != 0){
// Adds name to array
$data_missing[] = 'Customer ID';
} else {
// Trim white space from the name and store the name
$cid = trim($_POST['cid']);
}
if(empty($_POST['email'])){
// Adds name to array
$data_missing[] = 'Email';
} else {
// Trim white space from the name and store the name
$email = trim($_POST['email']);
}
if(empty($_POST['address'])){
// Adds name to array
$data_missing[] = 'Address';
} else {
// Trim white space from the name and store the name
$address = trim($_POST['address']);
}
if(empty($_POST['phone'])){
// Adds name to array
$data_missing[] = 'Phone Number';
} else {
// Trim white space from the name and store the name
$phone = trim($_POST['phone']);
}
if(empty($_POST['pid']) && $_POST['pid'] != 0){
// Adds name to array
$data_missing[] = 'Product ID';
} else {
// Trim white space from the name and store the name
$pid = trim($_POST['pid']);
}
if(empty($_POST['quantity'])){
// Adds name to array
$data_missing[] = 'Quantity';
} else {
// Trim white space from the name and store the name
$amount = trim($_POST['quantity']);
}
if(empty($data_missing)){
require_once('mysqli_connect.php');
$query = $dbc->prepare('SELECT individual_cost FROM stock 
WHERE product_ID = ?');
$query->bind_param("i", $pid);
$query->execute();
$response = $query->get_result();
$row = mysqli_fetch_array($response);
$individual = $row['individual_cost'];
$total = $amount * $individual;
mysqli_stmt_close($query);
#mysqli_close($dbc);
#require_once('mysqli_connect.php');
$sql = 'INSERT INTO orders(order_ID, customer_ID, email, addres, 
phone, product_ID, quantity, total_cost) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
$stmt = $dbc->prepare($sql);
$stmt->bind_param("iisssiid", $oid, $cid, $email, 
$address, $phone, $pid, $amount, $total);
$stmt->execute();
$affected_rows = mysqli_stmt_affected_rows($stmt);
if($affected_rows == 1){
echo 'Order Entered';
echo 'Total Cost: ' . $total;
mysqli_stmt_close($stmt);
mysqli_close($dbc);
echo '<form action="orderadded.php" method="post">
<b>Add a New Order</b>
<p>Order ID:
<input size = "30" value="' . $oid + 1 . '" disabled>
<input type="hidden" name="oid" size="30" value="' . $oid + 1 . '">
</p>
<p>Customer ID: 
<input type="text" name="cid" size="30" value="" />
</p>
<p>Email:
<input type="text" name="email" size="30" value="" />
</p>
<p>Address:
<input type="text" name="address" size="30" value="" />
</p>
<p>Phone Number:
<input type="text" name="phone" size="30" value="" />
</p>
<p>Product ID:
<input type="text" name="pid" size="30" value="" />
</p>
<p>Quantity:
<input type="text" name="quantity" size="30" value="" />
</p>
<p>
<input type="submit" name="submit" value="Add Order" />
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