<?php
  // Connect to the database
  $conn = mysqli_connect("localhost", "root", "", "job");

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get form data
  $empId = $_POST["empId"];
  $name = $_POST["name"];
  $gender = $_POST["gender"];
  $address = $_POST["address"];
  $contact = $_POST["contact"];
  $age = $_POST["age"];
  $status = $_POST["status"];
  
  // Insert data into the database
  $sql = "INSERT INTO employee (empId, name, gender, address, contact, age, status) VALUES ('$empId','$name','$gender','$address','$contact','$age','$status')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data added successfully.');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close connection
  mysqli_close($conn);

  // Redirect to the index page
  header("Location: employees.php");
?>
