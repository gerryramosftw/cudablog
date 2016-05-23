
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

<?php
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        echo "Tag 1 is: " . $_POST["tagslist"][0] . "<br>";
        echo "Tag 2 is: " . $_POST["tagslist"][1] . "<br>";
        echo "Tag 3 is: " . $_POST["tagslist"][2] . "<br>";
echo "For each starts here";
foreach( $_POST as $stuff ) {
    if( is_array( $stuff ) ) {
        foreach( $stuff as $thing ) {
            echo "The tag is: " . $thing . "<br>";
        }
    }
}
echo "<hr>";
echo "For each ends here";
        global $connection;
        $safe_header = $_POST["header"];
        $safe_header = mysqli_real_escape_string($connection, $safe_header);
        $safe_content = $_POST["content"];
        $safe_content = mysqli_real_escape_string($connection, $safe_content);
        $safe_subheading= $_POST["subheading"];
        $safe_subheading = mysqli_real_escape_string($connection, $safe_subheading);
        $safe_tags = $_POST["tags"];
        $safe_tags = mysqli_real_escape_string($connection, $safe_tags);
        $postid = 2;
//        echo "Post type received was " . $_POST["post_type"];
        if (!isset($_POST["post_type"])) {
         echo "Post type must be selected, press back on your browser";
         exit;
        } elseif ($_POST["post_type"] == "exner") {
         $postid = 1;
        } elseif ($_POST["post_type"] == "tech_solution") {
         $postid = 2;
        }
?>


        <?php
        $query = "insert into solution_posts (";
        $query .= "post_type, sol_title, subheading, post, tags) values (";
        $query .="$postid,'{$safe_header}','{$safe_subheading}', '{$safe_content}','{$safe_tags}')";
        mysqli_query($connection, $query);
//        echo "The completed query is: " . $query;
        ?>


<div class="container">
	<div class="jumbotron">
        <h1>Your submission has been posted</h1>
	</div>
</div>



<?php include("layouts/footer.php"); ?>
