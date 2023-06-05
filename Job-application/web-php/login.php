<?php


$conn = mysqli_connect("localhost", "root", "", "job");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = $_POST['name'];
    $AdmNo = $_POST['AdmNo'];

    
    $query = "SELECT * FROM admin WHERE name = '$name' AND AdmNo = '$AdmNo'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
       
        echo '<script>alert("Login successful."); window.location.href = "dashboard.php";</script>';
    } else {
        
        echo '<script>alert("Invalid username or password. Please try again."); window.location.href = "login.html";</script>';
    }
}



mysqli_close($conn);

?>
