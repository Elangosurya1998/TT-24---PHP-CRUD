<?php

include_once('dbconnection.php');

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>email</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}


try {
  $stmt = $conn->prepare("SELECT id, firstname, lastname, email FROM MyGuests");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  $resultValues = new TableRows(new RecursiveArrayIterator($stmt->fetchAll()));

  foreach($resultValues as $key => $value) {
    echo $value;
  }
  
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null;
echo "</table>";
?>