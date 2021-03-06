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
    <link href="css/bootstrap.min.css" rel="stylesheet">
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

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="homep.php">Back to home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="edit_submit_post.php">Create a new post</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="post.php">Sample Post</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <div class="intro-header" style="background-image: url('img/bsf_hero.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="site-heading">
                        <h1 style="font-weight:800;">The Resource for Barracuda Technicians</h1>
                        <hr class="small">
                        <span class="subheading">Please address questions or additions to this site to <strong>gramos</strong>.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        <div class="container">
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





    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="bg-primary text-center">
                <h2 class="section-heading">Latest solutions:</h2>
                </div>

                <div class="post-preview">
                    <a href="post.php">
                        <h2 class="post-title">
                           Customer saying that emails are being "delayed" by barracuda unit.
                        </h2>
                        <h3 class="post-subtitle">
                        Common issues: Barracuda receives email at a certain time, however is delivered at a MUCH later time from the email headers.</h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Gerry Ramos</a> on April 8, 2016</p>
                </div>
                <div class="post-preview">
                    <a href="post1.php">
                        <h2 class="post-title">
                          Customer is complaining that outbound queue is high, and they rebooted the box! 
                        </h2>
                        <h3 class="post-subtitle">
                        Issues Occurring: Emails are stuck in "Processing" when you check the outbound queue.
			</h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Gerry Ramos</a> on April 11, 2016</p>
                </div>

        <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        
            <div class="col-xs-6">
                <div class="bg-primary text-center">
                <h2 class="section-heading">Latest news from Exner:</h2>
                </div>


    <!-- START ITERATION OF POSTS -->

<?php $query2="select * from solution_posts order by id desc"; ?>
<?php $result2 = mysqli_query($connection, $query2); ?>
<?php
    for ($i=0;$i<3;$i++){
    $row2 = mysqli_fetch_assoc($result2);
    $content ='<div class="post-preview">';
    $content .='<a href="content_processing.php?id=' . $row2["id"] . '"';
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
?>
    <!-- END ITERATION -->


    <!-- take out posts
                <div class="post-preview">
                    <a href="exnerpost2.html">
                        <h4 class="post-title">
                         ESS delays in incoming mail - again
                        </h4>
                        <h3 class="post-subtitle">
                        <span class="label label-warning">Update!</span> Read chat and check your emails people
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Gerry Ramos</a> on April 12, 2016</p>
                </div>


                <div class="post-preview">
                    <a href="exnerpost3.html">
                        <h4 class="post-title">
                        ESS TRAINING - Email sent out to a customer today to explain the ESS delay issues 
                        </h4>
                        <h3 class="post-subtitle">
                       <span class="label label-success">Training</span> Email Training 
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Gerry Ramos</a> on April 12, 2016</p>
                </div>


                <div class="post-preview">
                    <a href="exnerpost1.html">
                        <h4 class="post-title">
                          How does ESS handle outbound mail to multiple recipients in v2016-4 and above.
                        </h4>
                        <h3 class="post-subtitle">
                         <span class="label label-danger">Critical</span> Internal information only!
			</h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Gerry Ramos</a> on April 8, 2016</p>
                </div>
    -->

        <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="viewallexner.php">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>



	</div>
    </div>

    <hr>

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

