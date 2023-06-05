<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "job";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $Location = $_POST["Location"];
    $AdmNo = $_POST["AdmNo"];

    $sql = "INSERT INTO admin (name, Gender, location, AdmNo) VALUES ('$name', '$gender', '$Location', '$AdmNo')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Login successful."); window.location.href = "dashboard.php";</script>';
    } else {
            echo "<script>alert('Login Failed')</script>";  $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
