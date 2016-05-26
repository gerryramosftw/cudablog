

<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "password";
  $dbname = "cudaposts";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection occurred.
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
         mysqli_connect_error() .
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
<?php include("layouts/header.php"); ?>

    <div id="main">
      <div id="navigation">
    <!-- Navigation -->

    </div>
      <div id="page">
        <h2>Admin Menu</h2>
        <p>Welcome to the admin area.</p>
        <ul>
          <li><a href="manage_content.php">Manage Website Content</a></li>
          <li><a href="manage_admins.php">Manage Admin Users</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
<?php 
include("layouts/footer.php");
?>
