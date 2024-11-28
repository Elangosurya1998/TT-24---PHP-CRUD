<?php

include_once('dbconnection.php');

$id = $_GET['id'];

try {
  $stmt = $conn->prepare("SELECT * FROM myguests WHERE id=$id LIMIT 1");
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);

}catch(PDOException $e){
  echo 'Error :'. $e->getMessage();
}

?>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<h1>Simple Edit Form</h1>
	<br/><br/>

	<form action="update.php" method="post" name="form1">
    <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
		<table width="25%" border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="firstname" value="<?php echo $result['firstname']; ?>" required></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lastname" value="<?php echo $result['lastname']; ?>" required></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo $result['email']; ?>" required></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

 
