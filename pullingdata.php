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




<div class="container">
    <div class="jumbotron">
     <?php global $connection; ?>
     <?php $query="select * from solution_posts order by id desc"; ?>
     <?php
        $result = mysqli_query($connection, $query);
        if ($result){
        echo "Success!";
        } else {
        die("Database query failed: " . mysqli_error($connection));
        }
     ?>

      <?php
        $result2 = mysqli_query($connection, $query);
        while($result = mysqli_fetch_assoc($result2)){
        echo "Title we got was: " . $result["sol_title"];
        echo "<hr />";
        }
      ?>
    </div>
</div>


<?php include("layouts/footer.php"); ?>

