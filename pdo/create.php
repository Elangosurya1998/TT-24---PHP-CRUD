
<?php

if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<p>New record created successfully!</p>";
}
?>
<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<h1>Simple Form</h1>
	<br/><br/>

	<form action="store.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="firstname"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lastname"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>
