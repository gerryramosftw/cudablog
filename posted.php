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
                        <a href="post.html">Sample Post</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <div class="intro-header" style="background-image: url('img/bsf_hero.jpg'); height:200px">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="site-heading" style="padding: 50px 0 0 0">
                        <h1 style="font-weight:800;font-size: 40px;padding: 0 0 0 0">The Resource for Barracuda Technicians</h1>
                        <hr class="small">
                        <span class="subheading">Please address questions or additions to this site to <strong>gramos</strong>.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



        <div class="bg-primary container-fluid">
                <div class="row">
                        <div class="text-center col-xs-8 col-xs-offset-2">
                        <h2 class="section-heading">Your post has been submitted</h2>
                        </div>
                </div>

        </div>


                <!-- BEGIN POST -->

        <div class="container">
            <div class="row">
		<div class="col-xs-6 col-xs-offset-3" style="white-space: pre;">
                <br>
    <!-- GET THE HEADER -->
		<?php
		global $connection;
		$safe_header = $_POST["header"];
		$safe_header = mysqli_real_escape_string($connection, $safe_header);
		$safe_content = $_POST["content"];
		$safe_content = mysqli_real_escape_string($connection, $safe_content);
		$query = "insert into solution_posts (sol_title, post) values ('{$safe_header}', '{$safe_content}')";
		mysqli_query($connection, $query);
		?>
    <!-- GET THE POST -->
        <!-- Lets display our data -->
        <?php $query2="select * from solution_posts order by id desc limit 1"; ?>
        <?php $result2 = mysqli_query($connection, $query2); ?>
        <?php 
        $result = mysqli_fetch_assoc($result2); 
        $theid = $result["id"];
        echo "The id is: " . $theid . "<br>";
        ?>
    <!-- GET THE SUBHEADING -->
                <br>
                    </div>
            </div>
        </div>
                <!-- END POST -->


    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3></h3>
                <div class="col-xs-4 col-xs-offset-4">
                    <?php
                    $link = '<a href="content_processing.php?id=' . $theid . '"' . 'class="btn btn-lg btn-light">Click to View your post</a>';
                    echo $link;
                    ?>

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

<?php
 // Close the database connection
 if (isset($connection)){
 mysqli_close($connection);
 }
?>
