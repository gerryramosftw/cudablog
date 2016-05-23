<?php include("layouts/header.php"); ?>
<?php include("includes/db_connection.php"); ?>
    <div class="container">
                <div>

            <div class="col-xs-8 col-xs-offset-2">
                <div class="bg-primary text-center">
                <h2 class="section-heading">All posts with tags of LDAP:</h2>
                </div>
    <div>
     <?php global $connection; ?>
     <?php $query='select * from solution_posts where tags like "%ldap%"'; ?>
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
    $content .='<p class="post-meta">Posted by <a href="#">admin</a></p>';
    $content .='</div>';
        echo $content;
        echo "<hr />";
        }
      ?>
    </div>

<?php include ("layouts/footer.php"); ?>
