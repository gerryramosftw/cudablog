
<?php
 //redirecting to a new page

 function redirect_to($new_location){
 header ("Location: ". $new_location);
 exit;
 }

?>

<?php
                if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
//                        redirect_to("homep.php");
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
    <link href="css/styles.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


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
                        <h1>Customer is complaining that outbound queue is high, and they rebooted the box!</h1>
                        <h2 class="subheading">
			Issues Occurring: Emails are stuck in "Processing" when you check the outbound queue.</h2>
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
		<p>So the customer calls in and is saying "my outbound queue is high!"</p>
		<p>Customer says "Oh and by the way I rebooted the box.</p>
		<p>At this point whenever a customer reboots a box it's really hard, you need to advise them that it is much easier
		to track the problem down as it is occurring because we can actually see what's wrong, when they reboot
		the box it usually fixes the issue.</p>
		<p>However in this case you can atleast check out <kbd>/mail/tmp/snapshot.txt</kbd> and try to look for processes that were hogging
		up resources when their <kbd>count_queues</kbd> was high.</p>
		<h2 class="section-heading">Log into the back end</h2>
		<br>
		<p> run <kbd>less /mail/tmp/snapshot.txt</kbd></p>
		<pre>
count_queues: 34/2215/46


top - 15:45:10 up  7:03,  0 users,  load average: 2.43, 2.70, 2.58
Tasks: 192 total,   2 running, 190 sleeping,   0 stopped,   0 zombie
Cpu(s): 21.9% us,  3.4% sy, 16.2% ni, 49.1% id,  9.3% wa,  0.0% hi,  0.2% si
Mem:   1910684k total,  1775352k used,   135332k free,    17680k buffers
Swap:  2047164k total,   404136k used,  1643028k free,   223952k cached

  PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  COMMAND
19713 mta       20   0  6292  984  604 R   99  0.1  63:56.65 tlsmgr
 8736 scana     35  15  235m 193m 7052 S   32 10.4   0:16.14 amavisd
		</pre>

		<p>In this case we see tlsmgr taking up a TON of resources and there was just an email sent out about this (4/8/2016)
		Follow these commands to help fix the issue:</p>

		<p>You might see these in <kbd>/mail/log/debug</kbd> logs:</p>

<pre>
errors:Apr 04 20:56:55 2016 ofilter notify/tlsmgr: fatal: error [-30987] seeking /mail/email_outbound/var/lib/postfix/smtp_tls_session_cache.db: Success 
errors:Apr 05 08:35:13 2016 ofilter outbound/tlsmgr: fatal: error reading /mail/email_outbound/var/lib/postfix/smtp_tls_session_cache.db: Unknown error 4294936321 
errors:Apr 05 10:07:16 2016 ofilter outbound/tlsmgr: fatal: error reading /mail/email_outbound/var/lib/postfix/smtp_tls_session_cache.db: Unknown error 4294936309 
errors:Apr 05 10:41:03 2016 ofilter outbound/tlsmgr: fatal: error reading /mail/email_outbound/var/lib/postfix/smtp_tls_session_cache.db: Unknown error 4294936321 
errors:Apr 05 11:34:31 2016 ofilter outbound/tlsmgr: fatal: error reading /mail/email_outbound/var/lib/postfix/smtp_tls_session_cache.db: Unknown error 4294936321 
errors:Apr 05 13:14:36 2016 ofilter outbound/tlsmgr: fatal: error reading 
</pre>
		<p>To resolve the issue:</p>
<pre>
# rm -f /mail/email_outbound/var/lib/postfix/smtp_tls_session_cache.db
# postfix reload

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
