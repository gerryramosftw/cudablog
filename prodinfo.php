g?php
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

    <title>Sample Post</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">


</head>

<body>
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">

            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="homep.php">Back to Home</a>
            </div>
	</nav>

    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/bbf_hero.jpg')">
        <div class="container">
            <div class="row">
        <!--        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	-->	<div class="col-xs-12">
                    <div class="post-heading">
                        <h1>Understanding how the Barracuda Spam Firewall works</h1>
                        <h2 class="subheading">
			
			</h2>
                        <span class="meta">Posted by <a href="#">Gerry Ramos</a> on April 8, 2016</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

   <!-- POST CONTENT -->

    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>This is the information on the inner-workings of the Spam Firewall</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-exchange fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Difference between Inbound and Outbound queues</strong>
                                </h4>
                                <p>Inbound or Outbound email?!</p>
                                <a href="inoutq.php" class="btn btn-dark" style="margin:0 0 30px 0;background-color:#fff;">click to learn</a>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-sort-alpha-asc fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Policy Precedence<br><br></strong>
                                </h4>
                                <p>Can I whitelist a block policy?</p>
                                <a href="#" class="btn btn-dark" style="margin:0 0 30px 0;background-color:#fff;">click to learn</a>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-database fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>MySQL Database</strong>
                                </h4>
                                <p>What can I do when a database is offline?</p>
                                <a href="mysql.php" class="btn btn-dark" style="margin:0 0 30px 0;background-color:#fff;">click to learn</a>
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-rss fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Quarantine Notifications</strong>
                                </h4>
                                <p>When are quarantine notifications supposed to go out? How do I verify they were sent?</p>
                                <a href="#" class="btn btn-dark" style="margin:0 0 30px 0;background-color:#fff;">click to learn</a>
                            </div>
                        </div>

                      </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>



   <!-- END POST CONTENT -->


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
