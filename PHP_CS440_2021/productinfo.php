<?php
require_once('mysqli_connect.php');
// Create a query for the database
$stmt = $dbc->prepare("SELECT * FROM stock");
$stmt->execute();
$response = $stmt->get_result();
// If the query executed properly proceed
if($response){
    echo '<table align="left" cellspacing="5" cellpadding="8">
    <tr>
    <form method = "POST" action ="index.php">
    <td><input type = "submit" value="Go back to main menu"/>
    </td></tr></form>
    <tr>
    <td align="left"><b>ID</b></td>
    <td align="left"><b>Product Name</b></td>
    <td align="left"><b>Quantity</b></td>
    <td align="left"><b>Individual Cost</b></td>
    </tr>';
    // mysqli_fetch_array will return a row of data from the query
    // until no further data is available
    while($row = mysqli_fetch_array($response)){
        echo '<tr><td align="left">' .
        $row['product_ID'] . '</td><td align="left">' .
        $row['product_name'] . '</td><td align="left">' .
        $row['quantity'] . '</td><td align="left">' .
        $row['individual_cost'] . '</td><td align="left">';
        echo '</tr>';
        }
    echo '</table>';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>All Product Info</title>
</head>
</html>