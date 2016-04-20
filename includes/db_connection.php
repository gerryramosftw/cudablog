<?php
  // 1. Create a database connection

  $dbhost = "localhost";
  $dbuser = "widget_cms";
  $dbpass = "password";
  $dbname = "widget_corp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection occurred.
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
         mysqli_connect_error() .
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>


<?php
        // 2. Perform database query
        $query  = "SELECT * ";
        $query .= "FROM subjects ";
        $query .= "WHERE visible = 1 ";
//      $query .= "ORDER BY position ASC";
        $result = mysqli_query($connection, $query);
        // Test if there was a query error
        if (!$result) {
                die("Database query failed.");
        }
?>

