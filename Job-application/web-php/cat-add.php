<?php
  // Connect to the database
  $conn = mysqli_connect("localhost", "root", "", "job");

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get form data
  $catid =$_POST["catId"];
  $name = $_POST["name"];
  
  // Insert data into the database
  $sql = "INSERT INTO category (catId,name) VALUES ('$catId','$name')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data added successfully.');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close connection
  mysqli_close($conn);

  // Redirect to the index page
  header("Location: category.php");
?>
