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


        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3" style="white-space: pre;">
                <br>
    <!-- PASS IN VALUES -->
    <?php
        global $connection;
        $safe_header = $_POST["header"];
        $safe_header = mysqli_real_escape_string($connection, $safe_header);
        $safe_content = $_POST["content"];
        $safe_content = mysqli_real_escape_string($connection, $safe_content);
        $safe_subheading= $_POST["subheading"];
        $safe_subheading = mysqli_real_escape_string($connection, $safe_subheading);
        $safe_tags = $_POST["tags"];
        $safe_tags = mysqli_real_escape_string($connection, $safe_tags);
        $theid = $_GET["id"];
        $post_type = $_GET["post_type"];
        if ($post_type == "exner") {
//            $db_to_use = "solution_posts";
//            $head = "sol_title";
        $postid = 1;
        } elseif ($post_type == "tech_solution"){
//            $db_to_use = "tech_solutions";
//            $head = "heading";
        $postid = 2;
        } else {
        echo "Post type selection failed. Exiting";
        exit;
        }
    ?>

        <?php
        echo $theid . " was the id we got. " . "<br>";
//        echo $db_to_use . " is the db to use." . "<br>";
//        echo $tags . " were the tags that we got";
        $query = "UPDATE solution_posts SET sol_title='{$safe_header}', subheading='{$safe_subheading}'";
        $query .= ", tags = '{$tags}', post='{$safe_content}' where id = $theid";
//        echo $query;
        mysqli_query($connection, $query);
        ?>

    <!-- Footer -->
    <footer style="background-color: #fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p class="copyright text-muted" style="color: #000; font-size: 20px">Copyright &copy; Barracuda Networks 2016</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<?php
 //5. Close the database connection
 if (isset($connection)){
 mysqli_close($connection);
 }
?>

