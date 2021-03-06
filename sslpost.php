
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

    <title>Sample Post</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.min.css" rel="stylesheet">

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
	-->	<div class="col-xs-12">
                    <div class="post-heading">
                        <h1>How to tackle SSL Certificate Issues</h1>
                        <h2 class="subheading">
			
			</h2>
                        <span class="meta">Posted by <a href="#">Gerry Ramos</a> on April 8, 2016</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-1">
		-->		<div class="col-xs-9 col-xs-offset-1">
		<h2 class="section-heading">Alright SSL Certificates!</h2>
		<h4 class="section-subheading">Issue: CheckTLS is failing even though cert seems to be uploaded properly</h4>
		<p>These are a little bit intimidating in the beginning because they CAN be confusing
		but honestly they aren't that hard at all, there is pretty much a process for things you need to check
		when you see an SSL certificate <kbd>failing check tls</kbd> or showing <kbd>untrusted</kbd> or <kbd>missing chain file</kbd></p>

		<h3 class="section-subheading">SSL Errors will come in a VARIETY of errors!</h3>
		<p>however luckily for you the fixes usually reside
                in one of these questions being answered and verified:</p>
		<p>1) Does the common name match the hostname of the Barracuda unit?</p>
		<p>2) Is the bundle built correctly and complete?</p>
		<p>3) Does the certificate and key match? (Check with sslshopper.com)</p>
		<h3 class="section-subheading">Once these questions have been answered and verified, you will most likely would have found the problem</h3>
		<p>Otherwise you are potentially looking at an escalation -- ONLY once these have been verified and all troubleshooting has been
		exhausted!</p>

		<h4 class="section-subheading">Now for the troubleshooting!</h4>
		<p>For example in this case we see that in the GUI <kbd>Advanced --&gt; Secure Administration</kbd> the cert seems to be uploaded properly</p>
		<img src="img/sslcert6.PNG" class="img-responsive">
		<img src="img/sslcert1.PNG" class="img-responsive">
		<p>but however if we look at checktls, boom! the error says fail. now let's troubleshoot why.  Assuming that it HAS been uploaded properly
		one of the most common issues and common questions is the relation between the common name to give to the certificate and what it
		should be, it's very important to note that the <kbd>common name of the certificate HAS to match the hostname</kbd> given to the barracuda unit.</p>




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
