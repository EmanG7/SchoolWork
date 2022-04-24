<html>
<head>
<title>Add Customer</title>
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
if(empty($_POST['first_name'])){
// Adds name to array
$data_missing[] = 'First Name';
} else {
// Trim white space from the name and store the name
$fname = trim($_POST['first_name']);
}
if(empty($_POST['last_name'])){
// Adds name to array
$data_missing[] = 'Last Name';
} else{
// Trim white space from the name and store the name
$lname = trim($_POST['last_name']);
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
if(empty($data_missing)){
require_once('mysqli_connect.php');
$sql = 'INSERT INTO customer(customer_id, fname, lname, 
email, addres, phone) VALUES (?, ?, ?, ?, ?, ?)';
$stmt = $dbc->prepare($sql);
$stmt->bind_param("isssss", $id, $fname, $lname, $email, $address, $phone);
$stmt->execute();
$affected_rows = mysqli_stmt_affected_rows($stmt);
if($affected_rows == 1){
echo 'Customer Entered';
mysqli_stmt_close($stmt);
mysqli_close($dbc);
echo '<form action="customeradded.php" method="post">
<b>Add a New Customer</b>
<p>Customer ID:
<input size = "30" value="' . $id + 1 . '" disabled>
<input type="hidden" name="id" size="30" value="' . $id + 1 . '">
</p>
<p>First Name:
<input type="text" name="first_name" size="30" value="" />
</p>
<p>Last Name:
<input type="text" name="last_name" size="30" value="" />
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
<p>
<input type="submit" name="submit" value="Add Customer" />
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