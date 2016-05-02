<?php include("layouts/header.php"); ?>
<?php include("includes/db_connection.php"); ?>

<!DOCTYPE html>

<html>
    <head>
        <title>Delete Page</title>
    </head>

    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>The page has been deleted</h1>
            <?php

            $theid = $_GET["id"];
            $post_type = $_GET["post_type"];
            if ($post_type == "exner" ) {
             $table = 'solutions_posts';
            } elseif ($post_type == "tech_solution") {
             $table = 'tech_solutions';
            } else {
            echo "Table look up failed";
            exit;
            }
            ?>
            <?php
                global $connection;
                $query = "select * from tech_solutions where id = $theid";
                $result = mysqli_query($connection, $query);
                $result = mysqli_fetch_assoc($result);
                echo "The tags associated with id = $theid is: " . $result["tags"] . "<br>";
            ?>

            </div>
        </div>
    </body>



</html>








<?php
    //5. Close Connection
    mysqli_close($connection);
?>





