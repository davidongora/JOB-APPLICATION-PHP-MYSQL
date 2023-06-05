<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="dashboard.css">
     
    <script src="js.js"></script>
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<style>
    table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #333;
  color: white;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>
</div>
            <span class="logo_name"><b><h2>Job system</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="dashboard.php">
                    <section id="Dashboard">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="companies.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Companies</span>
                </a></li>
                <li><a href="category.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Category</span>
                </a></li>
                <li><a href="applicants.php">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Applicants</span>
                </a></li>
                <li><a href="employees.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Employees</span>
                </a></li>
                <li><a href="admin.php">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Admins</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

              
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
    <i class="uil uil-search"></i>
    <form action="search.php" method="POST">
        <input type="text" name="search" placeholder="Search here...">
        <button type="submit" name="submit">Search</button>
    </form>
</div>

            <!--<img src="images/profile.jpg" alt="">-->
        </div>

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

// Query to count number of records in the admin table
$sql_applicants = "SELECT COUNT(*) as count FROM applicants";
$result_applicants = $conn->query($sql_applicants);

// Query to count number of records in the companies table
$sql_companies = "SELECT COUNT(*) as count FROM companies";
$result_companies = $conn->query($sql_companies);

// Query to count number of records in the employees table
$sql_employee = "SELECT COUNT(*) as count FROM employee";
$result_employee = $conn->query($sql_employee);

// Check if queries were successful
if ($result_applicants->num_rows > 0 && $result_companies->num_rows > 0 && $result_employee->num_rows > 0) {
  // Get the count values
  $row_applicants = $result_applicants->fetch_assoc();
  $count_applicants = $row_applicants["count"];

  $row_companies = $result_companies->fetch_assoc();
  $count_companies = $row_companies["count"];

  $row_employee = $result_employee->fetch_assoc();
  $count_employee = $row_employee["count"];

  // Display the count values in div elements
  
  echo "<div class='dash-content'>
  <div class='dash-content'>
  <div class='overview'>
  <i class='uil uil-tachometer-fast-alt'></i>
<span class='text'>Dashboard</span>
</div>

  <div class='boxes'>
          <div class='box box1'>
            <i class='uil uil-thumbs-up'></i>
            <span class='text'>Admin</span>
            <span class='number'>$count_applicants</span>
          </div>
          <div class='box box2'>
            <i class='uil uil-comments'></i>
            <span class='text'>Companies</span>
            <span class='number'>$count_companies</span>
          </div>
          <div class='box box3'>
            <i class='uil uil-share'></i>
            <span class='text'>Employees</span>
            <span class='number'>$count_employee</span>
          </div>
        </div>";
} else {
  echo "No records found.";
}

// Close connection
$conn->close();
?>

<!-- HTML code to display the count 
<div class="dash-content">
  <div class="overview">
    <div class="title">
      <i class="uil uil-tachometer-fast-alt"></i>
      <span class="text">Dashboard</span>
    </div>

    <div class="boxes">
      <div class="box box1">
        <i class="uil uil-thumbs-up"></i>
        <span class="text">Admin</span>
        <span class='number'>$count_admin</span>

        
      </div>
      <div class="box box2">
        <i class="uil uil-comments"></i>
        <span class="text">Companies</span>
        <span class='number'>$count_companies</span>
      </div>
      <div class="box box3">
        <i class="uil uil-share"></i>
        <span class="text">Employees</span>
        <span class='number'>$count_employee</span> -->
                   
        
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">recent vacancies</span>
                </div>
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


// Get data from the database
$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);

 // Initialize counter variable
$count = 1;


// Check if any data was returned
if (mysqli_num_rows($result) > 0) {

 

  // Display the data in a table
  echo "<table>";
  echo "<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Gender</th>
  <th>address</th>
  <th>contact</th>
  <th>age</th>
  <th>action</th>
  </tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["empId"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["gender"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
    echo "<td>" . $row["contact"] . "</td>";
    echo "<td>" . $row["age"] . "</td>";
    echo "<td>";
    echo "<a href='emp-delete.php?id=" . $row["empId"] . "'><button style='margin-right: 20px;'>Delete</button></a>";
    //echo "<a href='emp-delete.php?id=".$row["empId"]."'>Delete</a>";

    echo "<a href='emp-edit.php?id=" . $row["empId"] . "'><button>Edit</button></a>";
    echo "</td>";
    
    echo "</tr>";
   
    
    $count++;
  }
  echo "</table>";

} else {

  // Display a message if no data was returned
  echo "No data found.";

}
 // Define how many results you want per page
 $results_per_page = 10;

 // Find out the number of results stored in the database
 $sql = "SELECT * FROM employee";
 $result = mysqli_query($conn, $sql);
 $number_of_results = mysqli_num_rows($result);

 // Determine how many pages there are
 $number_of_pages = ceil($number_of_results / $results_per_page);

 // Determine which page number visitor is currently on
 if (!isset($_GET['page'])) {
   $page = 1;
 } else {
   $page = $_GET['page'];
 }

 // Determine the SQL LIMIT starting number for the results on the current page
 $this_page_first_result = ($page - 1) * $results_per_page;

 // Retrieve the data from the database
 $sql = "SELECT * FROM employee LIMIT $this_page_first_result, $results_per_page";
 $result = mysqli_query($conn, $sql);



 // Display the pagination buttons
 echo "<div class='pagination'>";
 for ($page = 1; $page <= $number_of_pages; $page++) {
   echo "<a href='employee.php?page=" . $page . "'>" . $page . "</a>";
 }
 echo "</div>";
 

// Close the database connection
mysqli_close($conn);
?>


<!-- Add button -->
<button class="button" onclick="openForm()"><i class="fa fa-plus"></i> Add</button>
                        
            </div>
        </div>
    </section>

    <!--<script src="script.js"></script>-->
</body>
</html>
