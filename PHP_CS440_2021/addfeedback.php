<html>
<style>
.row { display: flex; align: center; }
.column { flex: 33%; padding-left: auto;  padding-right: auto; margin-top: 10px; margin-bottom: 10px;}
</style>
<head>
<title>Add Customer Feedback</title>
</head>
<body>
<form action="feedbackadded.php" method="post">
<h3>Add Feedback</h3>
<table><tr class = "row">
<td class = "column"><label>Email:</label></td>
<td class = "column"><input type="text" name="email" size="30" value="" /></td>
</tr><tr class = "row">
<td class = "column"><label>Feedback:</label></td>
<td class = "column">
<textarea  name="feedback" rows="10" cols="40"></textarea>
</td>
</tr><tr class = "row">
<td class = "column"></td>
<td class = "column"><input type="submit" name="submit" value="Add Feedback" /></td>
</tr></table>
</form>
</body>
</html>