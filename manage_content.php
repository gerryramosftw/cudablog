
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
    <br>
    <br>
    <p style="color:#fff">Options</p>
    <ul>
    <li><a href="manage_content.php">Manage Content</a></li>
    <li><a href="manage_realtime.php">Manage Real-Time Stats</a></li>
    </ul>

    <a href="admin.php">Back to Admin Menu</a>
    </div>
      <div id="page">
        <h2>Manage Post Content</h2>
        <p>For now there is only one admin, this is where posts will be managed.<br>
        Later on users will be able to manage their own posts.
        </p>
      </div>
    </div>
<?php
include("layouts/footer.php");
?>
