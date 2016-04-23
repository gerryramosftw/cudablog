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
                        <p>Atleast let us hope so.
                        </p>
                        </div>
                </div>

        </div>


                <!-- BEGIN POST -->

    <article>
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-1">
		--> <div class="col-xs-9 col-xs-offset-1" style="white-space: pre;">
                <br>
		<?php
		global $connection;
		$safe_header = $_POST["header"];
		$safe_header = mysqli_real_escape_string($connection, $safe_header);
		$safe_content = $_POST["content"];
		$safe_content = mysqli_real_escape_string($connection, $safe_content);
		$query = "insert into solution_posts (sol_title, post) values ('{$safe_header}', '{$safe_content}')";
		mysqli_query($connection, $query);
		?>
                <?php
		echo "The header you submitted was: " . $_POST['header'] . "<br>";
                echo "The content you submitted was: " . $_POST['content'];
                ?>
                <br>
                    </div>
            </div>
        </div>
    </article>
                <!-- END POST -->


    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3></h3>
                <div class="col-xs-4 col-xs-offset-2">
                    <a href="content_processing.php" class="btn btn-lg btn-light">Click to View your post</a>
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
                   
