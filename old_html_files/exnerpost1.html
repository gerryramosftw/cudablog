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
                        <h1>How does ESS handle outbound mail to multiple recipients in v2016-4 and above</h1>
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
		<h2 class="section-heading">This is an internal solution for now.</h2>
		<br>
		<pre style="width: 900px;font-size:14px">
This is an internal solution (currently)

Q: How does ESS handle mail to multiple recipients in v2016-4 and above.

A: First off ESS still handles outbound mail to a single recipient normally, Accept the mail, connect to the 
destination, act as an transparent relay between the two servers.

Mail to multiple recipients is completely  different. Let say you have email going a hundred email addresses 
in dozen different domains.
 
BESS now does this for OUTBOUND MAIL.
 
1. BESS accepts the connection
 
2. BESS gets the "mail from" and returns an 250 OK
 
3. BESS gets the "rcpt to"
 
   If the recipient domain is in our database we check to see
   if the address is in the user list. If it is we return a
   250 OK, if it is not and Unmanaged users is set to SCAN we
   return a 250 OK but if unmanaged users is set to BLOCK we
   return a 550 blocked.
 
   If the recipient domain is NOT in our database we return a
   250 OK
 
   If the "Envelope-From/Receipt TO" pair is in our cached
   database we will return that result.

4. Sending Server sends the message to BESS.
 
   If it is seen as spam a 5XX is returned for each user at
   End of Data.
 
   If it is not seen as spam then each recipients mail server
   is connected and normal delivery attempted.
 
   If successful a 250 OK for that recipient is returned at
   "End of Data". 
   The "Envelope From/Receipt TO" Pair Result is Cached.
 
   If recipient server returns a 4xx then a 4xx is returned at
   "End of Data" for that recipient. 
   The "Envelope From/Receipt TO" Pair Result is cached.

   If all the recipients in an email fail then we return the
   errors normally at end of data. If there is a mix or 4xx
   and 5xx responses BESS changes them all to 4xx and returns
   that for the recipients at "End of Data". 
   The "Envelope From/Receipt TO" Pair Result is cached.

5. The original message is delivered to the recipients and BESS
   caches the message details so *IF* it is retried again we
   do not deliver it again.
 
6. The SENDING server, if there are Deferrals, retries the message.
 
   BESS sees this as a retry and NOW during the connection for
   the "rcpt to" BESS returns the stored responses for the
   recipients (250, 4xx or 5xx). BESS knows it already delivered
   the message so does NOT try to Deliver it again.
 
   The sending server gets back the correct responses at the
   "rcpt to" and will either retry deferred recipients or return
   to the sender an NDR for the rejected recipients.
 
   The retry for the deferred recipients will be unique so our
   message cache will no longer stop the redelivery of this
   new message.
 
NOTE: If the recipient server starts accepting mail for a deferred recipient the mail 
will still be delayed (deferred) by BESS because of our recipient cache. The SENDER/RECIPIENT 
pair will be in the cache for 90 minutes so sending servers will need to retry the mail for 
at least 90 minutes. This should not be a problem because most mail servers usually retry mail for 24 hours.
 
NOTE FOR MICROSOFT EXCHANGE USERS: Microsoft Exchange will return an NDR saying that the messages 
failed to ALL recipients if even one recipient gets a 5xx response (rejected) at "End of Data". 
It will RETRY the entire message if even one recipient gets a 4xx response (defer) at "End of Data". 
Because of this we are changing any 5xx response to a 4xx so that the mail is retried by the 
exchange server and we can return the correct responses at the "rcpt to" command. When exchange 
retires the message it should see it correctly and retry only those recipients that got a 4xx 
and generate an NDR for those recipients that got a 5xx.
 
Final note: At the end of DATA we only give one response for the mixed case results, which is 
the 4xx response. This is enforced by the bsmtpd code because you can only return one "action" 
object from the function that is called by the "end of message/data" trigger. 
At this time you should not be seeing an NDR created by exchange for all addresses 
in an email when only some of addresses actually failed.
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
