<?php
  // Connect to the database
  $conn = mysqli_connect("localhost", "root", "", "job");

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get form data
  $appid = $_POST["appid"];
  $name = $_POST["name"];
  $regdate = $_POST["regdate"];
  $category = $_POST["category"];
  

  
  // Insert data into the database
  $sql = "INSERT INTO applicants (appid, name, category, regdate) VALUES ('$appid','$name','$regdate','$category')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data added successfully.');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close connection
  mysqli_close($conn);

  // Redirect to the index page
  header("Location: applicants.php");
?>
