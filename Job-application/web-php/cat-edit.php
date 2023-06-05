<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "job");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $location = $_POST['location'];
    $AdmNo = $_POST['AdmNo'];

    // Update the data in the database
    $sql = "UPDATE admin SET name=?, gender=?, location=? WHERE AdmNo=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $name, $gender, $location, $AdmNo);
    mysqli_stmt_execute($stmt);

    // Check if update was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "<script>alert('Data updated successfully.');</script>";
    } else {
        echo "<script>alert('Error updating data.');</script>";
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Get the data from the database for the selected row
$catId = $_GET['catId'];
$sql = "SELECT * FROM category WHERE catId=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $catId);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form-popup" id="editForm">
        <form action="" method="POST">
            <h2>Edit Employee</h2>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" value="<?php echo $row['name']; ?>" required>

            <label for="gender"><b>Gender</b></label>
            <input type="text" placeholder="Enter Gender" name="gender" value="<?php echo $row['gender']; ?>" required>

            <label for="location"><b>Location</b></label>
            <input type="text" placeholder="Enter Location" name="location" value="<?php echo $row['location']; ?>" required>

            <input type="hidden" name="AdmNo" value="<?php echo $row['AdmNo']; ?>">

            <button type="submit" name="submit" class="btn">Update</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>

    <script>
        function openForm() {
            document.getElementById("editForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("editForm").style.display = "none";
        }
    </script>
</body>
</html>
