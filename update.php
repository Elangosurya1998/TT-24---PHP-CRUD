<?php

include_once('dbconnection.php');

$id = $_POST['id'];

$firstName = $_POST['firstname'];
$lastName =$_POST['lastname'];
$email = $_POST['email'];

try{

    $sql = "UPDATE MyGuests SET firstname=:firstname,lastname=:lastname,email=:email WHERE id=$id";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':firstname',$firstName);
    $stmt->bindParam(':lastname',$lastName);
    $stmt->bindParam(':email',$email);
    
    $stmt->execute();

    header('location: index.php');

} catch(PDOException $e) {
    echo 'Error:'. $e->getMessage();
} 
