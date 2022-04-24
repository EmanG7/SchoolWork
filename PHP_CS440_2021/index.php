<!DOCTYPE html>
<html>
<style>
h1,p { 
    text-align: center;
}
.bttn {
    display: inline-block;
    padding: 0.6em 2.4em;
    margin: 0 0.2em 0.2em 0;
    background: rgba(153,0,0,1);
    border: 0.32em solid rgba(255,255,255,0);
    border-radius: 10em;
    box-sizing: border-box;
    text-decoration: none;
    font-family: 'Roboto',sans-serif;
    font-weight: 300;
    color: white;
    text-shadow: 0 0.04em 0.04em rgba(0,0,0,0.35);
    text-align: center;
    transition: all 0.2s;
    width: 225px;
}
.bttn:hover { border-color: rgba(255,51,51,1); }
.row { display: flex; align: center; }
.column { flex: 33%; padding-left: auto;  padding-right: auto; }
.center { margin-left: auto; margin-right: auto; }
</style>
<head>
<meta charset="utf-8">
<title>Elden Forge</title>
</head>
<body>
<h1>Elden Forge</h1>
<p>Main Menu</p>
<table class = "center"><tr class = "row">
<td class = "column"><form method = "POST" action ="addcustomer.php">
<input class = "bttn" type = "submit" value="Add Customer"/>
</form></td>
<td class = "column"><form method = "POST" action ="searchcustomer.php">
<input class = "bttn" type = "submit" value="Search for Customer Info"/>
</form></td></tr>
<tr class = "row">
<td class = "column"><form method = "POST" action ="addfeedback.php">
<input class = "bttn" type = "submit" value="Add Feedback"/>
</form></td>
<td class = "column"><form method = "POST" action ="feedbackpage.php">
<input class = "bttn" type = "submit" value="All Customer Feedback"/>
</form></td></tr>
<tr class = "row">
<td class = "column"><form method = "POST" action ="addorder.php">
<input class = "bttn" type = "submit" value="Add Order"/>
</form></td>
<td class = "column"><form method = "POST" action ="searchorder.php">
<input class = "bttn" type = "submit" value = "Search for Order Info"/>
</form></td></tr>
<tr class = "row">
<td class = "column"><form method = "POST" action ="addproduct.php">
<input class = "bttn" type = "submit" value = "Add Product"/>
</form></td>
<td class = "column"><form method = "POST" action ="productinfo.php">
<input class = "bttn" type = "submit" value = "All Product Info"/>
</form></td></tr></table>
</body>
</html>