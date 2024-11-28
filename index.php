<?php

include_once('dbconnection.php');

echo "<a href='create.php'>Create</a><br>";

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>email</th><th>Edit</th></tr>";

try {
  $stmt = $conn->prepare("SELECT id, firstname, lastname, email FROM MyGuests");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  $resultValues = $stmt->fetchAll();

  foreach($resultValues as $key => $value) {
    echo "<tr>";
    echo "<td style='width:150px;border:1px solid black;'>" . $value['id']. "</td>";
    echo "<td style='width:150px;border:1px solid black;'>" . $value['firstname']. "</td>";
    echo "<td style='width:150px;border:1px solid black;'>" . $value['lastname']. "</td>";
    echo "<td style='width:150px;border:1px solid black;'>" . $value['email']. "</td>";
    echo "<td style='width:150px;border:1px solid black;'><a href='edit.php?id=" . $value['id'] . "'>Edit</a>  <a href='delete.php?id=" . $value['id'] . "'>Delete</a></td></tr>";
    echo "</tr>";
  }
  
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null;
echo "</table>";
?>
