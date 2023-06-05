<?php
  // Connect to the database
  $conn = mysqli_connect("localhost", "root", "", "job");

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get form data
  $name = $_POST["name"];
  
  // Insert data into the database
  $sql = "INSERT INTO admin (name) VALUES ('$name')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data added successfully.');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close connection
  mysqli_close($conn);

  // Redirect to the index page
  header("Location: dashboard.php");
?>
