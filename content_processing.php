

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
                        <a href="demo4.php">Create a new post</a>
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



<?php $post_type = $_GET["post_type"]; ?>

<?php if ($post_type == "tech_solution") { ?>

    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/bbf_hero.jpg')">
        <div class="container">
            <div class="row">
             <div class="col-xs-12">
                    <div class="post-heading">

            <!-- Let's Grab from the database -->
            <?php
            global $connection;
            $theid = $_GET["id"];
            $poster = $_GET["user"];
            echo "The id for this post is: " . $theid;
            $query = "SELECT * FROM solution_posts where id={$theid} limit 1";
            $page_header = mysqli_query($connection, $query);
            $header = mysqli_fetch_assoc($page_header);
            ?>
                        <h1><?php echo $header['sol_title']; ?></h1>
                        <h2 class="subheading">
                        <?php echo $header["subheading"]; ?>
                        <?php echo "Tags for this post: " . $header["tags"]; ?>
                        </h2>
                        <span class="meta">Posted by <a href="#"><?php echo $poster; ?></a><!-- ON date code needs to go here--></span>
                    </div>
                </div>
            </div>
        </div>
    </header>


        <!-- BEGIN POST -->

        <div class="container">
            <div class="row">
                   <div class="col-xs-9 col-xs-offset-1" style="padding: 50px 0 0 0">
                <?php
                        global $connection;
                        $query = "SELECT post FROM solution_posts where id = {$theid} limit 1";
                        $post = mysqli_query($connection, $query);
                        $postassoc = mysqli_fetch_assoc($post);
                ?>
                <?php
                echo '<div style="/* white-space: pre-wrap */">';
                echo $postassoc["post"];
                echo '</div>';
                ?>
                    </div>
            </div>
        </div>
        <!-- END POST -->



<?php   } else {
 ?>
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/bbf_hero.jpg')">
        <div class="container">
            <div class="row">
             <div class="col-xs-12">
                    <div class="post-heading">

			<!-- Let's Grab from the database -->
			<?php
			global $connection;
            $post_type = "exner";
            $theid = $_GET["id"];
            $poster = $_GET["user"];
            echo "The id for this post is: " . $theid;
			$query = "SELECT * FROM solution_posts where id={$theid} limit 1";
			$page_header = mysqli_query($connection, $query);
			$header = mysqli_fetch_assoc($page_header);
			?>
                        <h1><?php echo $header['sol_title']; ?></h1>
                        <h2 class="subheading">
                        <?php echo $header["subheading"]; ?>
                        </h2>
                        <span class="meta">Posted by <a href="#"><?php echo $poster; ?></a> ON date code needs to go here</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


		<!-- BEGIN POST -->

        <div class="container">
            <div class="row">
                   <div class="col-xs-9 col-xs-offset-1" style="padding: 50px 0 0 0">
			    <?php
                        global $connection;
                        $query = "SELECT post FROM solution_posts where id = {$theid} limit 1";
                        $post = mysqli_query($connection, $query);
                        $postassoc = mysqli_fetch_assoc($post);
                ?>
                <?php
                echo '<div>';
                echo $postassoc["post"];
                echo '</div>';
                ?>
                    </div>
            </div>
        </div>
		<!-- END POST -->

<?php } ?>

    <div class="col-xs-6 col-xs-offset-3 row">
            <br />
        <?php
        $form = '<form action="edit_post.php?post_type=';
        $form .= $post_type . '&id=' . $theid;
        $form .='" method="post">';
        echo $form;
        ?>

          <input type="submit" name="edit" value="Edit this post" />
        </form>

        <?php
        $form = '<form action="delete_page.php?post_type=';
        $form .= $post_type . '&id=' . $theid;
        $form .='" method="post">';
        echo $form;
        ?>

          <input type="submit" name="delete" value="Delete this post" />
        </form>


    </div>
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

