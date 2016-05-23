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
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="homep.php">Back to home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="edit_submit_post.php">Create a new post</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="post.php">Sample Post</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

        <div class="container">
                <div>

            <div class="col-xs-8 col-xs-offset-2">
                <div class="bg-primary text-center">
                <h2 class="section-heading">All posts from Exner:</h2>
                </div>
    <div>
     <?php global $connection; ?>
     <?php $query="select * from solution_posts where post_type = 1 order by id desc"; ?>
     <?php
        $result = mysqli_query($connection, $query);
        if ($result){
        echo "Success!";
        } else {
        die("Database query failed: " . mysqli_error($connection));
        }
        $result2 = mysqli_query($connection, $query);
        while($result = mysqli_fetch_assoc($result2)){
    $content ='<div class="post-preview">';
    $content .='<a href="content_processing.php?id=' . $result["id"] . '&post_type=tech_solution' . '"';
    $content .='<h4 class="post-title">';
    $content .=$result["sol_title"];
    $content .='</h4>';
    $content .='<h3 class="post-subtitle">';
    $content .= $result["subheading"];
    $content .='</h3>';
    $content .='</a>';
    $content .='<p class="post-meta">Posted by <a href="#">admin</a> on April 12, 2016</p>';
    $content .='</div>';
        echo $content;
        echo "<hr />";
        }
      ?>
    </div>


    <!-- START ITERATION OF POSTS -->

<?php /*$query3="select * from solution_posts where post_type = 2 order by id desc"; ?>
<?php $result3 = mysqli_query($connection, $query3); ?>
<?php $status = null; ?>
<?php
    for ($i=0;$i<200;$i++){
    $row3 = mysqli_fetch_assoc($result3);
    $content ='<div class="post-preview">';
    $content .='<a href="content_processing.php?id=' . $row3["id"] . '&post_type=tech_solution' . '"';
    $content .='<h4 class="post-title">';
    $content .=$row3["sol_title"];
    $content .='</h4>';
    $content .='<h3 class="post-subtitle">';
    if (isset($status)){
//    $content .='<span class="label label-warning">Update!</span>';
    } //this is going to be for when you have your button for status
    $content .= $row3["subheading"];
    $content .='</h3>';
    $content .='</a>';
    $content .='<p class="post-meta">Posted by <a href="#">admin</a> on April 12, 2016</p>';
    $content .='</div>';
    echo $content;


    } */
?>

<?php
    $thequery = "select * from solution_posts where post_type = 2";
?> 
<?php
    $result = mysqli_query($connection, $thequery);
    $assocarray = mysqli_fetch_assoc($result);
    echo $assocarray["sol_title"];
?>


<?php $query2="select * from solution_posts where post_type = 2 order by id desc"; ?>
<?php 
    $result2 = mysqli_query($connection, $query2); 
    $formaxid = mysqli_query($connection, $query2);
    ?>
<?php
    $themaxrowid = mysqli_fetch_assoc($formaxid);
    $maxrowid = $themaxrowid["id"];
    echo "Max row id received was " . $maxrowid;
    echo $result2 . "<br>";

//    echo "The max row id is: " . $maxrowid;
    for ($i=0;$i < $maxrowid;$i++){
    $row2 = mysqli_fetch_assoc($result2);
    $content ='<div class="post-preview">';
    $content .='<a href="content_processing.php?id=' . $row2["id"] . '"';
    $content .='<h4 class="post-title">';
    $content .=$row2["sol_title"];
    if ($row2["sol_title"] == null) {
    break;
    }
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

