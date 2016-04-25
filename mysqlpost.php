
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
                        <h1>MySQL Database offline! What do?</h1>
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
		<h2 class="section-heading">So customer calls in and says that database is offline and it is telling him not to reboot. What do you do?</h2>
		<p>Well you really only have one thing you CAN do, you need to open up a support tunnel,
		without one there is nothing you can do regarding this issue.</p>
		<p>You can open up the support tunnel really only 3 ways:
		<ul class="list-group">
		 <li class="list-group-item"> 1) Open it through the web interface.  Which you clearly can't do if you're having this issue</li>
		 <li class="list-group-item"> 2) Change the web address when they try to log in from http://IP:port/cgi-mod/index.cgi, replace the <kbd>index.cgi</kbd>
		 with <kbd>support-tunnel.cgi</kbd> to finally have http://someip:someport/cgi-mod/support-tunnel.cgi</li>
		 <li class="list-group-item"> 3) If the the second one fails, your only option is to connect a PS2 keyboard and monitor to the device, PS2 KEYBOARD,
		that is very important, USB keyboards will not work.  Try to connect those two peripherals there and open up a support tunnel through the console</li>
		</ul>

		<h2 class="section-subheading">Now if you're logged in and you have successfully bsh'd or spamdiag'd into it, do the following:</h2>
<p>lets get the mail to stop flowing so just run
</p>
<pre>mtactl stop
lmctl stop 
</pre>
<p>You’ll see something like this:
</p>

<pre>
[root@10.221.196.12] # ./spamdiag.pl
DBI connect('config','',...) failed: Can't connect to local MySQL server through socket '/var/run/mysql/mysql.sock' (2) at ./spamdiag.pl line 373
Can't connect to local MySQL server through socket '/var/run/mysql/mysql.sock' (2) at ./spamdiag.pl line 373.
[root@10.221.196.12] # mtactl stop
[  OK  ] down mta: [  OK  ]
[root@10.221.196.12] # lmctl stop
Stopping log_monitor: [FAILED]
[root@10.221.196.12] # lmctl stop
Stopping log_monitor: [FAILED]
[root@10.221.196.12] # cd /mail
[root@10.221.196.12] # cp mysql mysql.old

</pre>
then make a copy of the old database

cp mysql mysql.old

now recreate the database and wait, it could take up to 15-30 minutes, maybe even longer


once  you do that just type in <kbd>mysql_recreate.sh</kbd>

<p>you will see this when it runs and finishes</p>
<pre>
[root@10.221.196.12] # mysql_recreate.sh
/usr/sbin/mysqld-max: No such file or directory
Number of users: 4
Refreshing the pu_pref database.
Reboot the system to fully complete the mysql re-creation!
Removing /tmp/nowatchdog...
[root@10.221.196.12] # crontab -e
no crontab for root - using an empty one
crontab: installing new crontab
[root@10.221.196.12] # safe_reboot.sh
cat: /tmp/login_user: No such file or directory
safe_reboot.sh - starting
Stopping crond: [  OK  ]

Broadcast message from root (pts/0) (Thu Apr 14 07:45:12 2016):

The system is going down for reboot NOW!
</pre>
<p>And you’ll notice here I put in a cron job to automatically start the support tunnel for us
<br>
You can do this by typing in the command line: <kbd>crontab –e</kbd>
</p>

<p>Then put in: <kbd>@reboot /home/product/code/firmware/current/bin/support-tunnel &
</kbd></p>
<p>After the mysql finishes it does tell you to restart to finish everything, and you’ll notice I did a safe_reboot.sh to do so
<br>
And boom it should be good!
<br>
If it’s not, ping your tier 2! 
</p>

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
