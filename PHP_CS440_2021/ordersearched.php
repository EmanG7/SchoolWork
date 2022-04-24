<?php
if(isset($_POST['submit'])){
    $data_missing = array();
    if(empty($_POST['input']) && $_POST['input'] != 0){
    // Adds name to array
    $data_missing[] = 'Search Input';
    } else {
    // Trim white space from the name and store the name
    $input = trim($_POST['input']);
    }
    if(empty($data_missing)){
        require_once('mysqli_connect.php');
        // Create a query for the database
        $stmt = $dbc->prepare("SELECT * FROM orders WHERE order_ID = ? OR email = ?");
        $stmt->bind_param("is", $input, $input);
        $stmt->execute();
        $response = $stmt->get_result();
        // If the query executed properly proceed
        if($response){
            echo '<table><tr><td>
            <table  align="left" cellspacing="5" cellpadding="8"><tr>
            <tr><form method = "POST" action ="ordersearched.php">
            <td><input type = "text" name = "input" placeholder = "Enter Order ID or Email"
            value = "' . $input . '"/></td><td>
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
            <td align="left"><b>Total Cost</b></td></tr>';
            // mysqli_fetch_array will return a row of data from the query
            // until no further data is available
            while($row = mysqli_fetch_array($response)){
                echo '<tr><td align="left">' .
                $row['order_ID'] . '</td><td align="left">' .
                $row['customer_ID'] . '</td><td align="left">' .
                $row['email'] . '</td><td align="left">' .
                $row['addres'] . '</td><td align="left">' .
                $row['phone'] . '</td><td align="left">' .
                $row['product_ID'] . '</td><td align="left">' .
                $row['quantity'] . '</td><td align="left">' .
                $row['total_cost'] . '</td><td align="left">'
                ;
                echo '</tr>';
                }
            echo '</table></td></tr></table>';
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
<title>Order Info Lookup</title>
</head>
</html>