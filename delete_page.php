<?php include("layouts/header.php"); ?>
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


<!DOCTYPE html>

<html>
    <head>
        <title>Delete Page</title>
    </head>

    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>The page has been deleted</h1>
            </div>
        </div>
    </body>



</html>








<?php
    //5. Close Connection
    mysqli_close($connection);
?>





