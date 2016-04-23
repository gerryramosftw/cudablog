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

    <title>Sample Post</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


</head>
<body>
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">

            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="edit_submit_post.php">Back to Posting</a>
            </div>
        </nav>

    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/bbf_hero.jpg')">
        <div class="container">
            <div class="row">
             <div class="col-xs-12">
                    <div class="post-heading">

			<!-- Let's Grab from the database -->
			<?php
			global $connection;
			$query = "SELECT sol_title FROM solution_posts order by id desc limit 1";
			$page_header = mysqli_query($connection, $query);
			$header = mysqli_fetch_assoc($page_header);
			?>
                        <h1><?php echo $header['sol_title']; ?></h1>
                        <h2 class="subheading">

                        </h2>
                        <span class="meta">Posted by <a href="#">Pull user from cookie</a> ON date code needs to go here</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

	<?php echo "hello" ?>

		<!-- BEGIN POST -->

    <article>
        <div class="container">
            <div class="row" style="white-space: pre-wrap">
                <!--<div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-1">
                -->             <div class="col-xs-9 col-xs-offset-1">
                <br>
			<?php
                        global $connection;
                        $query = "SELECT post FROM solution_posts order by id desc limit 1";
                        $post = mysqli_query($connection, $query);
                        $postassoc = mysqli_fetch_assoc($post);
                        ?>
                <?php
                //print_r($_POST);
		echo "The content is: " . $postassoc['post'];
                ?>
		<br>
                    </div>
            </div>
        </div>
    </article>
		<!-- END POST -->




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


</body>

</html>


<?php
 // Close the database connection
 if (isset($connection)){
 mysqli_close($connection);
 }
?>

