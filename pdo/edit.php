<?php

include_once('dbconnection.php');
$id = $_GET['id'];

try {

 $stmt = $conn->prepare("SELECT * FROM myguests WHERE id=$id LIMIT 1");
 $stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

$sql = "UPDATE myguests SET firstname='john',lastname='Doe' WHERE id=$id";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";

    // echo "New record created successfully. Last inserted ID is: " . $last_id;
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  } 
 