<?php
  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "job";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get the record ID from the query parameter
  $id = $_GET['id'];

  // Get the data from the form
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $location = $_POST['location'];

  // Update the record in the database
  $sql = "UPDATE admin SET name='$name', gender='$gender', location='$location' WHERE AdmNo='$id'";
  $result = mysqli_query($conn, $sql);

  // Check if the update was successful
  if ($result) {
    echo "Record updated successfully.";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
?>
