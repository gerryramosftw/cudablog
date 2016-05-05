<?php
  // Create a database connection

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
        <?php echo "current user is: " . $_COOKIE["username"]; ?>
        <?php $poster = $_COOKIE["username"]; ?>
        <?php
        //echo "The post type received was: " . $_GET["post_type"];
        $post_type = $_GET["post_type"];
        $theid = $_GET["id"];
        echo "<pre>";
        echo "Variable theid contains: " . $theid . "<br>";
        echo "Variable post_type contains: " . $post_type;
        echo "</pre>";
        echo '<form action="updatedb.php?user=';
        echo $poster;
        echo "&id=$theid&post_type=$post_type";
        echo '" method="post">';

        //1. Define database to be used
        if ($post_type == "tech_solution") {
//        $db_to_use = "tech_solutions";
//        $heading_to_use = "heading";
        $post_type = 2;
        } elseif ($post_type == "exner") {
//        $db_to_use = "solution_posts";
//        $heading_to_use = "sol_title";
        $post_type = 1;
        } else {
        echo "Database selection failed, can't pull the data. Yell at gramos or mheller";
        exit;
        }

//        echo "The db_to_use is: " . $db_to_use;
        ?>
        <!-- Get the original data from the db -->

        <?php
        $query = "select * from solution_posts where post_type = $post_type AND id = $theid";
        $thedata = mysqli_query($connection, $query);
        $thedata = mysqli_fetch_assoc($thedata);
        ?>
        <p>Post Title: <br>
        <textarea name="header" rows="2" cols="80"><?php echo $thedata["sol_title"] ?></textarea>
        </p>
        <p>Type of post: <br>
        <span class="label label-danger">NEED to select one!</span>
        Exner Post: <input type="radio" name="post_type" value="exner"/>
        Tech Solution: <input type="radio" name="post_type" value="tech_solution"/>
        </p>
        <p>Subheading: <br>
        <textarea name="subheading" rows="2" cols="80"><?php echo $thedata["subheading"] ?></textarea>
        </p>
        <p>Content:<br />
        <textarea name="content" rows="15" cols="80"><?php echo $thedata["post"] ?></textarea>
      </p>
        <p>Tags:<br>
        List of tags are: spf, ldap, mysql, inoutq <br>
        <textarea name="tags" rows="1" cols="80"><?php echo $thedata["tags"]; ?></textarea>
        </p>

      <input type="submit" name="submit" value="Submit Post" />
                </div>
        </div>
        </body>
</html>


<?php include("layouts/footer.php"); ?>

