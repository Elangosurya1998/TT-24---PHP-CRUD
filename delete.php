<?php

include_once('dbconnection.php');

$id = $_GET['id'];

try{

    $sql = "DELETE FROM myguests WHERE id=$id";

    $conn->exec($sql);

    header('location: index.php');
    
}catch(PDOException $e){
    echo 'Error :' . $e->getMessage(); 
}
