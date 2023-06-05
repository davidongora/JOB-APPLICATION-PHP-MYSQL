<?php
// Replace database credentials with your own
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $new_name = $_POST['name'];
    $new_email = $_POST['email'];
    $new_phone = $_POST['phone'];
  
    // Update record in the table
    $sql = "UPDATE users SET name='$new_name', email='$new_email', phone='$new_phone' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
