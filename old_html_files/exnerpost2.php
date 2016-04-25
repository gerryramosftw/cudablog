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
	-->	<div class="col-xs-12">
                    <div class="post-heading">
                        <h1>ESS delays in incoming mail - again</h1>
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

		<h3 class="section-heading">4/13/2016 Update</h3>
<p>Yesterday engineering made some major changes to the ESS service.
</p>
<p>As a result this morning for the first time we did not see any of our ESS servers return the "Connection closed by foreign host" error and we did not see any delays in the delivery of mail.
</p>
<p>The problem is not resolved but engineering is making headway in finding out what is causing it.
</p>
<p>Thank you,
</p>

<p>Michael Exner</p>
<p>Tier III Support Engineer</p>

		<h2 class="section-heading">This is an internal solution for now.</h2>
		<br>
		<pre style="width: 900px;font-size:14px">
Seems that not everyone is reading the chat room or the emails I send out so will try once again

We DO have, and HAVE had delay issues with ESS for about 2 weeks now.

Our servers are returning a "Connection closed by foreign host" error which results in the sending mail server
deferring the mail and retrying

UNFORTUNATELY the sending server does not ROLL over to the next IP in our list it continues to try 
the same IP because it got a connection the last time.

64.235.154.105
64.235.153.10
64.235.153.2
64.235.150.252

Roll-Over on a DNS server only happens if the last connection timed out or they got a "connection refused" error

I've explained this in a couple of emails already and in the BESS chat room a dozen times.

Engineering is currently working on the problem but as of this morning still do not have a solution.



Michael Exner
Tier III Support Engineer

		</pre>   



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
