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

<div class="container">
    <div class="jumbotron">
    <?php
        // print_r($_POST);
        // echo "The post type is: <br>";
        if (!isset($_POST["post_type"])){
        echo '<h1><span class="label label-danger">Error</span><br></h1>';
        echo '<h2>Bro. You have to select a post type or this will fail.<br>';
        echo "press back on your browser.</h2>";
        exit;
        }

    ?>
    </div>
</div>
        <div class="bg-primary container-fluid">
                <div class="row">
                        <div class="text-center col-xs-8 col-xs-offset-2">
                        <h2 class="section-heading">Your post has been submitted</h2>
                        <a href="homep.php" class="btn btn-lg btn-light">Click to go back home</a>
                        </div>
                </div>

        </div>
    <pre>
    </pre>

                <!-- BEGIN POST -->


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

    ?>

		<?php 
         if ($_POST["post_type"] == "exner") {
        //$safe_subheading = mysqli_real_escape_string($connection, $safe_subheading);
		$query = "insert into solution_posts (sol_title, subheading, post) values ('{$safe_header}','{$safe_subheading}', '{$safe_content}')";
		mysqli_query($connection, $query);
		?>

    <!-- Lets display our data -->
        <?php $query2="select * from solution_posts order by id desc limit 1"; ?>
        <?php $result2 = mysqli_query($connection, $query2); ?>
        <?php 
        $result = mysqli_fetch_assoc($result2); 
        $theid = $result["id"];
        $subheading = $result["subheading"];
        echo "The subheading is: " . $subheading . "<br>";
        echo "The id is: " . $theid . "<br>";
        } elseif ($_POST["post_type"] == "tech_solution") {

        // Post Tech Solution to DB
        $query = "insert into tech_solutions (heading, subheading, post) values ('{$safe_header}','{$safe_subheading}', '{$safe_content}')";
        mysqli_query($connection, $query);
        //Read back the Data
        
        ?>

        <!-- Lets display our data -->
        <?php /* $query2="select * from tech_solutions order by id desc limit 1"; ?>
        <?php $result2 = mysqli_query($connection, $query2); ?>
        <?php
        $result = mysqli_fetch_assoc($result2);
        $theid = $result["id"];
        $subheading = $result["subheading"];
        echo "The subheading is: " . $subheading . "<br>";
        echo "The id is: " . $theid . "<br>";
        } else {
        ?>
    <!-- GET THE SUBHEADING -->
    <?php
        $post_type = $_POST["post_type"];
        echo "The post type received was " . $post_type;

    

    ?>
                <br>
                    </div>
            </div>
        </div>
                <!-- END POST -->

        <?php 
         echo "You need to select a post type";
         */ };

        ?>
</div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p class="copyright text-muted">Copyright &copy; Barracuda Networks 2016</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

<?php
 // Close the database connection
 if (isset($connection)){
 mysqli_close($connection);
 }
?>
