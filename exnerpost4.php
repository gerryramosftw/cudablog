<?php
  // 1. Create a database connection

  $dbhost = "localhost";
  $dbuser = "widget_cms";
  $dbpass = "password";
  $dbname = "exnerposts";
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
                <a class="navbar-brand" href="index.html">Back to Home</a>
            </div>
        </nav>

    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/bbf_hero.jpg')">
        <div class="container">
            <div class="row">
        <!--        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        -->     <div class="col-xs-12">
                    <div class="post-heading">
                        <h1>
			
			
<?php
        // 2. Perform database query
        $query  = "SELECT * from posts order by id desc";
	$result = mysqli_query($connection, $query);
        $result = mysqli_fetch_assoc($result);
	echo $result["subject_line"];
        // Test if there was a query error
        if (!$result) {
                die("Database query failed.");
        }
?>
testing appending text
			</h1>
                        <h2 class="subheading">

                        </h2>
                        <span class="meta">Posted by <a href="#">Gerry Ramos</a> on April 8, 2016</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


<!-- POST CONTENT -->

    <article>
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-1">
                -->             <div class="col-xs-9 col-xs-offset-1">
                <h2 class="section-heading">Sample Email about these delays</h2>
                <br>
                <ul class="subjects">

		<?php
        // 2. Perform database query
        $query  = "SELECT * from posts order by id desc";
        $result = mysqli_query($connection, $query);
        $result = mysqli_fetch_assoc($result);
	echo $result["subject_line"];
        // Test if there was a query error
        if (!$result) {
                die("Database query failed.");
        }

	
		?>
                <ul class="subjects">
                <?php
                        // 3. Use returned data (if any)
                        while($subject = mysqli_fetch_assoc($result)) {
                                // output data from each row
                ?>
                                <li><?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?></li>
          <?php
                        }
                ?>
                </ul>

                </ul>





                    </div>
            </div>
        </div>
    </article>

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
        //5. Close Connection
        mysqli_close($connection);
?>

