<?php
// Include the database connection
include_once('dbconnection.php');

// Check if the form is submitted
if (isset($_POST['Submit'])) {
    // Capture form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
 
    try {
        // Prepare the SQL query using placeholders
        $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)";
       
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        
        // Bind the values to the placeholders
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':email', $email);

        // Execute the statement
        $stmt->execute();
        // Get the last inserted ID
        $last_id = $conn->lastInsertId();

        // Display success messlastname
        header("Location: index.php?success=1");
        
    } catch (PDOException $e) {
        // Handle errors
        echo "Error: " . $e->getMessage();
    }
}
?>

