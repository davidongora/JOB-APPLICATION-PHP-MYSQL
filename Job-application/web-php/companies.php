<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="dashboard.css">
     
   <!-- <script src="js.js"></script>-->
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">Job system</span>
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

                <li class="mode">
                    <a href="#">
                        <!--<i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>-->
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
        <div></div>
        <div></div>

    

    <!--<script src="script.js"></script>-->

  <title>Companies Data</title>
  <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">companies Data</span>
                </div>

    <!--<script src="script.js"></script>-->
    <h1>companies Info</h1>
  <style>
    /* Styles for the table */
    
    table {
      font-family: Arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #ddd;
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    /* Styles for the buttons */
    .button {
      display: inline-block;
      border-radius: 4px;
      background-color: #4CAF50;
      border: none;
      color: #fff0ff;
      text-align: center;
      font-size: 14px;
      padding: 10px;
      width: 80px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }

    .button:hover {
      background-color: #3e8e41;
    }

    .button.delete {
      background-color: #3e8e41;
    }

    .button.delete:hover {
      background-color: #d32f2f;
    }

    .button.edit {
      background-color: #008CBA;
    }

    .button.edit:hover {
      background-color: #0077A3;
    }

    /* Styles for the form */
    .form-popup {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9;
    }

    .form-container {
      max-width: 500px;
      margin: 100px auto;
      background-color: #FFF;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .form-container input[type=text], .form-container input[type=email] {
      width: 100%;
      padding: 10px;
      margin: 5px 0 15px 0;
      border: none;
      background: #f1f1f1;
    }

    .form-container input[type=text]:focus, .form-container input[type=email]:focus {
      background-color: #ddd;
      outline: none;
    }

    .form-container .btn {
      background-color: #4CAF50;
      color: #FFF;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom: 10px;
      opacity: 0.8;
    }

    .form-container .cancel {
      background-color: #FFA07A;
    }

    .form-container .btn:hover, .form-container .cancel:hover {
      opacity: 1;
    }

    .pagination {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.pagination a {
  display: inline-block;
  background-color: #4CAF50;
  color: white;
  padding: 10px 15px;
  margin: 0 5px;
  border-radius: 5px;
  text-decoration: none;
}

.pagination a:hover {
  background-color: #3e8e41;
}

  </style>

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
  $sql = "SELECT * FROM companies";
  $result = mysqli_query($conn, $sql);

   // Initialize counter variable
$count = 1;


  // Check if any data was returned
  if (mysqli_num_rows($result) > 0) {

   

    // Display the data in a table
    echo "<table>";
    echo "<tr>
    <th>comp Id</th>
    <th>Name</th>
    <th>companies</th>
    <th>Action</th>
    </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["compId"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["contact"] . "</td>";
      echo "<td>";
      echo "<a href='comp-delete.php?id=" . $row["compId"] . "'><button style='margin-right: 20px;'>Delete</button></a>";
      echo "<a href='comp-edit.php?id=" . $row["compId"] . "'><button>Edit</button></a>";
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
   $sql = "SELECT * FROM companies";
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
   $sql = "SELECT * FROM companies LIMIT $this_page_first_result, $results_per_page";
   $result = mysqli_query($conn, $sql);
 

 
   // Display the pagination buttons
   echo "<div class='pagination'>";
   for ($page = 1; $page <= $number_of_pages; $page++) {
     echo "<a href='companies.php?page=" . $page . "'>" . $page . "</a>";
   }
   echo "</div>";
   
 
  // Close the database connection
  mysqli_close($conn);
?>

  
  <!-- Add button -->
  <button class="button" onclick="openForm()"><i class="fa fa-plus"></i> Add</button>
  
  <!-- Form popup -->
  <div class="form-popup" id="add-form">
    <form action="comp-add.php" method="post" class="form-container">
      <h2>Add company</h2>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter name" name="name" required>

      <label for="companies"><b>companies</b></label>
      <input type="text" placeholder="Enter company name" name="companies" required>
  
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter email" name="email" required>
  
      <button type="submit" class="btn">Add</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
    </form>
  </div>
  
  <script>
    // Open and close the form popup
    function openForm() {
      document.getElementById("add-form").style.display = "block";
    }
  
    function closeForm() {
      document.getElementById("add-form").style.display = "none";
    }
  </script>
  
  </body>
  </html>
  
