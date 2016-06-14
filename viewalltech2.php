
<?php include("layouts/header.php"); ?>
<?php include("includes/db_connection.php"); ?>
<div style="background:#999">
<div class="container" style="background: #F7F7F7;box-shadow: 0 0 6px #000;">
 <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
     <div class="bg-primary text-center">
     <h2 class="section-heading">All Tech Solutions:</h2>
     </div>
<?php $query2="select * from solution_posts where post_type = 2 order by id desc"; ?>
<?php
    $result2 = mysqli_query($connection, $query2);
    $formaxid = mysqli_query($connection, $query2);
    ?>
<?php
    
    while ($row2 = mysqli_fetch_assoc($result2)){
    $content ='<div class="post-preview">';
    $content .='<a href="content_processing.php?id=' . $row2["id"] . '&post_type=tech_solution' . '"';
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
/*    $themaxrowid = mysqli_fetch_assoc($formaxid);
    $maxrowid = $themaxrowid["id"];
//    echo "The max row id is: " . $maxrowid;

    for ($i=0;$i < $maxrowid;$i++){
    $row2 = mysqli_fetch_assoc($result2);
    $content ='<div class="post-preview">';
    $content .='<a href="content_processing.php?id=' . $row2["id"] . '&post_type=tech_solution' . '"';
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
    echo "<hr />";

    }
*/
?>

    </div>

 </div><!-- END ROW -->
</div>
</div>

<?php include("layouts/footer.php"); ?>
