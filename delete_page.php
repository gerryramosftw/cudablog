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
            ?>
            <?php
                global $connection;
                echo "The table received " . $table . "<br>";
                echo "The id received was " . $theid . "<br>";
                $query = "delete from solution_posts where id = $theid";
                $result = mysqli_query($connection, $query);
            ?>

            </div>
        </div>
    </body>



</html>








<?php
    //5. Close Connection
    mysqli_close($connection);
?>





