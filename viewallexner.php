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
<!DOCTYPE html PUBLIC>

<html lang="en">
        <head>
                <title>Form</title>
        </head>
        <body>

        <div class="container">
                <div class="jumbotron">

            <div class="col-xs-6">
                <div class="bg-primary text-center">
                <h2 class="section-heading">Latest news from Exner:</h2>
                </div>


    <!-- START ITERATION OF POSTS -->

<?php $query2="select * from solution_posts order by id desc"; ?>
<?php 
    $result2 = mysqli_query($connection, $query2); 
    $formaxid = mysqli_query($connection, $query2);
    ?>
<?php
    $themaxrowid = mysqli_fetch_assoc($formaxid);
    $maxrowid = $themaxrowid["id"];
    echo "The max row id is: " . $maxrowid;
    for ($i=0;$i < $maxrowid;$i++){
    $row2 = mysqli_fetch_assoc($result2);
    $content ='<div class="post-preview">';
    $content .='<a href="content_processing.php?id=' . $row2["id"] . '"';
    $content .='<h4 class="post-title">';
    $content .=$row2["sol_title"];
    $content .='</h4>';
    $content .='<h3 class="post-subtitle">';
    if (isset($status)){
    $content .='<span class="label label-warning">Update!</span> Read chat and check your emails people';
    } //this is going to be for when you have your button for status
    $content .='</h3>';
    $content .='</a>';
    $content .='<p class="post-meta">Posted by <a href="#">Gerry Ramos</a> on April 12, 2016</p>';
    $content .='</div>';
//    $theid = 'The post ID of this is: ' . $row2["id"] . '<br>';
//    echo $theid;
    echo $content;


    }
?>

</div>
                </div>
        </div>
        </body>
</html>


<?php include("layouts/footer.php"); ?>

