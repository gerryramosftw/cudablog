
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
<br><br>
<?php
/*        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        echo "Tag 1 is: " . $_POST["tagslist"][0] . "<br>";
        echo "Tag 2 is: " . $_POST["tagslist"][1] . "<br>";
        echo "Tag 3 is: " . $_POST["tagslist"][2] . "<br>";


        echo "The for loop starts here: ";
        foreach ($_POST["tagslist"] as $tag){
            echo "The tag is: " . $tag . "<br />";
            echo "Holy shit its working";
        }
*/
/*
foreach( $_POST as $stuff ) {
    if( is_array( $stuff ) ) {
        foreach( $stuff as $thing ) {
            echo "The tag is: " . $thing . "<br>";
            }
        }
    }
*/
        global $connection;
        $safe_header = $_POST["header"];
        $safe_header = mysqli_real_escape_string($connection, $safe_header);
        $safe_content = $_POST["content"];
        $safe_content = mysqli_real_escape_string($connection, $safe_content);
        $safe_subheading= $_POST["subheading"];
        $safe_subheading = mysqli_real_escape_string($connection, $safe_subheading);
        $safe_tags = "";
        foreach ($_POST["tagslist"] as $tag){
        $safe_tags .= $tag . " ";
        }

        $safe_tags = mysqli_real_escape_string($connection, $safe_tags);
        $postid = 3;
//        echo "Post type received was " . $_POST["post_type"];
        if (!isset($_POST["post_type"]) || $_POST["post_type"] =="") {
         echo '<div class="container">';
         echo '<div class="jumbotron">';
         echo '<h1>Post type <span class="label label-danger">must</span> be selected, <span class="label label-warning">press back</span> on your browser</h1>' . '</div>';
         echo '</div>';
         exit;
        } elseif ($_POST["post_type"] == "exner") {
         $postid = 1;
        } elseif ($_POST["post_type"] == "tech_solution") {
         $postid = 2;
        }
?>


        <?php
        $query = "insert into solution_posts (";
        $query .="post_type, sol_title, subheading, post, tags, datecreation) values (";
        $query .="$postid,'{$safe_header}','{$safe_subheading}', '{$safe_content}','{$safe_tags}', CURRENT_DATE)";
        mysqli_query($connection, $query);
//        echo "The completed query is: " . $query;
        ?>


<div class="container">
	<div class="jumbotron">
        <h1>Your submission has been posted</h1>
	</div>
</div>



<?php include("layouts/footer.php"); ?>
