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

// Check if the search form was submitted
if (isset($_POST['submit'])) {
    // Get the search keyword
    $search = $_POST['search'];

    // Query the database
    $sql = "SELECT * FROM category WHERE catId LIKE '%$search%' OR name LIKE '%$search%'";
    $result = $conn->query($sql);

    // Check if any results were found
    if ($result->num_rows > 0) {
        // Display the search results
        while ($row = $result->fetch_assoc()) {
            echo "catId: " . $row['catId'] . " Name: " . $row['name'] . "<br>";
        }
    } else {
        echo "No results found.";
    }
}

// Close the database connection
$conn->close();
?>
