<?php
if(isset($_POST['submit'])){
    $data_missing = array();
    if(empty($_POST['lname'])){
    // Adds name to array
    $data_missing[] = 'Last_name';
    } else {
    // Trim white space from the name and store the name
    $last_name = trim($_POST['lname']);
    }
    if(empty($data_missing)){
        require_once('mysqli_connect.php');
        // Create a query for the database
        $stmt = $dbc->prepare("SELECT customer_id, fname, lname, email, addres, 
        phone, feedback FROM customer WHERE lname = ?");
        $stmt->bind_param("s", $last_name);
        $stmt->execute();
        $response = $stmt->get_result();
        // If the query executed properly proceed
        if($response){
            echo '<table align="left" cellspacing="5" cellpadding="8">
            <tr><form method = "POST" action ="customersearched.php">
            <td><input type = "text" name = "lname" placeholder = "enter customer\'s lastname"/ value = "';
            echo $last_name;
            echo '"></td><td>
            <input type = "submit" name = "submit" value = "Search"/></td>
            </form>
            <form method = "POST" action ="index.php">
            <td><input type = "submit" value="Go back to main menu"/>
            </td></tr></form>
            <tr>
            <td align="left"><b>ID</b></td>
            <td align="left"><b>First Name</b></td>
            <td align="left"><b>Last Name</b></td>
            <td align="left"><b>Email</b></td>
            <td align="left"><b>Address</b></td>
            <td align="left"><b>Phone</b></td>
            <td align="left"><b>Feedback</b></td>
            </tr>';
            // mysqli_fetch_array will return a row of data from the query
            // until no further data is available
            while($row = mysqli_fetch_array($response)){
                echo '<tr><td align="left">' .
                $row['customer_id'] . '</td><td align="left">' .
                $row['fname'] . '</td><td align="left">' .
                $row['lname'] . '</td><td align="left">' .
                $row['email'] . '</td><td align="left">' .
                $row['addres'] . '</td><td align="left">' .
                $row['phone'] . '</td><td align="left">' .
                $row['feedback'] . '</td><td align="left">'
                ;
                echo '</tr>';
                }
            echo '</table>';
            } else {
                echo "Couldn't issue database query<br />";
                echo mysqli_error($dbc);
        }
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);
    } else {
        echo 'You need to enter the following data<br />';
        foreach($data_missing as $missing){
        echo "$missing<br />";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Customer Info Lookup</title>
</head>
</html>