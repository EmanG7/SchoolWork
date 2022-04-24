<?php
require_once('mysqli_connect.php');
// Create a query for the database
$stmt = $dbc->prepare("SELECT fname, lname, feedback FROM customer");
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
    <td align="left"><b>First name</b></td>
    <td align="left"><b>Last name</b></td>
    <td align="left"><b>Feedback</b></td>
    </tr>';
    while($row = mysqli_fetch_array($response)){
        echo '<tr><td align="left">' .
        $row['fname'] . '</td><td align="left">' .
        $row['lname'] . '</td><td align="left">' .
        $row['feedback'] . '</td><td align="left">';
        echo '</tr>';
        }
    echo '</table>';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>All Feedback Info</title>
</head>
</html>