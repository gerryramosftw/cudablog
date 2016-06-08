
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
<?php
 function redirect_to($new_location){
 header ("Location: ". $new_location);
 exit;
 }
?>
<?php
                if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
                } else {
                        redirect_to("nopass.php");
                }
?>
<?php include("layouts/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Barracuda Blog</title>

    <!-- Bootstrap Core CSS and Custom CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!-- Custom CSS -->
<!--    <link href="css/styles.min.css" rel="stylesheet">
-->
    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

</head>
<div style="background: #999"> <!-- div to start grey background -->
    <!-- START POSTS-->
    <div class="bg-prim container">
        <div class="row container-fluid" style="padding:50px 0px;margin:0 0 50px 0">
            <div style="background: #fff;margin:0 10px 30px 30px" class="col-xs-4">
                <div class="bg-primary text-center">
                <h2 class="section-heading">Solution Posts:</h2>
                </div>

    <!-- START ITERATION OF POSTS -->

<?php $query3="select * from solution_posts where post_type = 2 order by id desc"; ?>
<?php $result3 = mysqli_query($connection, $query3); ?>
<?php $status = null; ?>
<?php
    for ($i=0;$i<5;$i++){
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
    $content .='<hr /></div>';
    echo $content;
    }
?>
    <!-- END ITERATION -->
       <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="viewalltech.php">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
<!-- ROW DIV ENDS HERE -->

            <div style="background: #fff;margin:0 10px 30 0" class="col-xs-4">
                <div class="bg-primary text-center">
                <h2 class="section-heading">Exner Posts:</h2>
                </div>

    <!-- START ITERATION OF POSTS -->

<?php $query2="select * from solution_posts where post_type = 1 order by id desc"; ?>
<?php $result2 = mysqli_query($connection, $query2); ?>
<?php $status = null; ?>
<?php
    for ($i=0;$i<5;$i++){
    $row2 = mysqli_fetch_assoc($result2);
    $content ='<div class="post-preview">';
    $content .='<a href="content_processing.php?id=' . $row2["id"] . '"';
    $content .='<h4 class="post-title">';
    $content .=$row2["sol_title"];
    $content .='</h4>';
    $content .='<h3 class="post-subtitle">';
    if (isset($status)){
//    $content .='<span class="label label-warning">Update!</span>';
    } //this is going to be for when you have your button for status
    $content .= $row2["subheading"];
    $content .='</h3>';
    $content .='</a>';
    $content .='<p class="post-meta">Posted by <a href="#">Admin</a> on April 12, 2016</p>';
    $content .='<hr /></div>';
    echo $content;
    }
?>
    <!-- END ITERATION -->
        <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="viewallexner.php">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>

            <div style="background: #fff" class="col-xs-3">
                <div class="bg-primary text-center">
                <h2 class="section-heading">Support Statistics</h2>
                </div>

            <p class="realstatsheader">BESS Alerts:</p>
            <?php $query3="select * from realtime where id=1"; ?>
            <?php $result3 = mysqli_query($connection, $query3); ?>
            <?php $row3 = mysqli_fetch_assoc($result3); ?>

            <p class="realstats"><?php echo $row3["rtpost"]; ?> 
            <i class="fa fa-check-square-o" aria-hidden="true" style="color:green;font-size:20px"></i> 
            </p>
            <hr>
            <?php $query3="select * from realtime where id=2"; ?>
            <?php $result3 = mysqli_query($connection, $query3); ?>
            <?php $row3 = mysqli_fetch_assoc($result3); ?>
            <p class="realstatsheader">ESG Alerts:</p>
            <p class="realstats"><?php echo $row3["rtpost"]; ?>
            <i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:red;font-size:20px"></i>
            </p>
            <?php $query3="select * from realtime where id=3"; ?>
            <?php $result3 = mysqli_query($connection, $query3); ?>
            <?php $row3 = mysqli_fetch_assoc($result3); ?>
            <hr>
            <p class="realstatsheader">Support Alerts:</p>
            <p class="realstats"><?php echo $row3["rtpost"]; ?>
            <i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:red;font-size:20px"></i>
            </p>

            </div>

    </div> <!--  ROW DIV ENDS HERE -->



    </div>
</div>
    <!-- END POSTS -->

    <!-- Troubleshooting Essentials START -->

    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Learn about the Spam Firewall</h3>
        <div class="col-xs-4 col-xs-offset-2">
                    <a href="prodinfo.php" class="btn btn-lg btn-light">Understanding the product<br> and troubleshooting essentials</a>
        </div>
        <div class="col-xs-4 col-xs-offset-1">
                    <a href="netapps.php" class="btn btn-lg btn-light">Understanding networking<br> applications</a>
        </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Troubleshooting Essentials END -->
</div> <!-- this is the div for the grey background to end -->


    <section id="services">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 text-center">
                    <h2 class="section-heading">"Why this website when we already have salesforce and techlib?"</h2>
                    <hr class="primary">
        <h3>Here are three reasons:</h3>
<br>                </div>
            </div>
        </div>
        <div class="container" style="padding:0 0 30px 0">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Designed for real-time application</h3>
                        <p class="text-muted">You will be hard pressed to find a solution for "How to prove barracuda is not delaying customer's email" in an
                        in depth fashion as this website does.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Designed for cohesion and efficiency</h3>
                        <p class="text-muted">Usually problems that occur RIGHT NOW do not have solutions yet because they are new or are bugs that need to be submitted.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-university wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Information from Tier 3/Engineering</h3>
                        <p class="text-muted">Usually these "solutions" to common immediate problems are sent via email,
                        however these easily get lost in the fray and everybody's inboxes is not the proper place to store this valuable information.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- GOAL START -->

        <div class="bg-primary container-fluid">
                <div class="row" style="padding: 0 0 30px 0">
                        <div class="text-center col-xs-8 col-xs-offset-2">
                        <h2 class="section-heading">The goal is to keep the support team all on the same page.</h2>
                        <p>It is very common that there is a big problem that a Tier 1 technician cannot solve, asks a Tier 2, they solve it then it is done.
                        There is a huge hole in inefficiency here because quite often when we run into a problem, other customers will run into it as well and the information
                        to solve that particular problem usually only stays within the person the asks the question.
                        </p>
                        </div>
                </div>

        </div>

    <!-- GOAL END -->


    <hr>



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
