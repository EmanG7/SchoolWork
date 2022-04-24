<html>
<head>
<title>Add Customer</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
$data_missing = array();
if(empty($_POST['email'])){
// Adds name to array
$data_missing[] = 'Email';
} else {
// Trim white space from the name and store the name
$email = trim($_POST['email']);
}
if(empty($_POST['feedback'])){
// Adds name to array
$data_missing[] = 'Feedback';
} else {
// Trim white space from the name and store the name
$feedback = trim($_POST['feedback']);
}
if(empty($data_missing)){
require_once('mysqli_connect.php');
$sql = 'UPDATE customer SET feedback = ? WHERE email = ?';
$stmt = $dbc->prepare($sql);
$stmt->bind_param("ss",$feedback,$email);
$stmt->execute();
$affected_rows = mysqli_stmt_affected_rows($stmt);
if($affected_rows == 1){
echo 'Feedback Entered';
mysqli_stmt_close($stmt);
mysqli_close($dbc);
echo '<form action="customeradded.php" method="post">
<b>Add Feedback</b>
<p>Email:
<input type="text" name="email" size="30" value="" />
</p>
<p>Feedback:
<textarea  name="feedback" rows="10" cols="40"></textarea>
</p>
<p>
<input type="submit" name="submit" value="Add Feedback" />
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