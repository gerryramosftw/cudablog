
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
    <link href="css/bootstrap.css" rel="stylesheet">

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
                        <h1>Customer complaining that Barracuda is delaying their email.</h1>
                        <h2 class="subheading">Common issues: Barracuda receives email at a certain time, however is delivered at a MUCH later time from the
			email headers.</h2>
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
		<h2 class="section-heading">First get the message headers</h2>
		<br>

		<p>Without the headers for this e-mail there is nothing you will be able to verify, find the message in the message log using the "Debug ID".
		It will look like this:</p>

		
		<pre>
Received: from barracuda.wnylc.com (72.45.254.194) by
la-mail.legalaidbuffalo.local (172.16.10.8) with Microsoft SMTP Server id
14.3.248.2; Thu, 7 Apr 2016 00:45:06 -0400
<kbd>X-ASG-Debug-ID: 1459970204-04bbee161513de40001-EFb1db</kbd>
Received: from mail-vk0-f47.google.com (mail-vk0-f47.google.com
[209.85.213.47]) by barracuda.wnylc.com with ESMTP id UE0bd1X4F2GSv7g4 for
&lt;tdefilipps@legalaidbuffalo.org&gt; Wed, 06 Apr 2016 15:16:44 -0400 (EDT)
X-Barracuda-Envelope-From: ejackson@wsnhs.org
X-Barracuda-Effective-Source-IP: mail-vk0-f47.google.com[209.85.213.47]
X-Barracuda-Apparent-Source-IP: 209.85.213.47
</pre>

	<p>Searching in the message log will show this on the UI:</p><br>
	<img src="img/inmessagelog.PNG" class="img-responsive">
	<br>
	<p>If you double click that message, you'll notice that it says received at a certain time HOWEVER not sent until a day later</p><br>
	<img src="img/messageisntsenttiladaylater.PNG" class="img-responsive"><br>
		<p>Now lets search for that in the directory <kbd>/mail/log/info</kbd>
		.  Let's use <kbd>zgrep</kbd> so that we search inside the archived files as well, you will see something like this:</p>

<pre>
[root@10.0.0.200] # zgrep 32115-70 /mail/log/info*
/mail/log/info.2.gz:Apr 06 15:16:45 2016 barracuda scan: (32115-70) LMTP::10024 /mail/scan/amavis-20160406T150839-32115: <ejackson@wsnhs.org> -> <tdefilipps@legalaidbuffalo.org> Received: SIZE=45526 from barracuda.wnylc.com ([127.0.0.1]) by localhost (barracuda.wnylc.com [127.0.0.1]) (amavisd-new, port 10024) with LMTP id 32115-70 for <tdefilipps@legalaidbuffalo.org>; Wed,  6 Apr 2016 15:16:45 -0400 (EDT)
/mail/log/info.2.gz:Apr 06 15:16:45 2016 barracuda scan: (32115-70) MEMUSAGE START - TOTAL:159156 SHARED:194700
/mail/log/info.2.gz:Apr 06 15:16:45 2016 barracuda scan: (32115-70) Checking: <ejackson@wsnhs.org> -> <tdefilipps@legalaidbuffalo.org>
/mail/log/info.2.gz:Apr 06 15:16:45 2016 barracuda scan: (32115-70) spam_scan start: 1459970204-310254-5653-81380-1
/mail/log/info.2.gz:Apr 06 15:16:45 2016 barracuda scan: (32115-70) msg body size : 33069\n
/mail/log/info.2.gz:Apr 06 15:16:45 2016 barracuda scan: (32115-70) *** Begining MIME scan -- /mail/scan/amavis-20160406T150839-32115/parts/part-00002
/mail/log/info.2.gz:Apr 06 15:16:45 2016 barracuda scan: (32115-70) *** Begining MIME scan -- /mail/scan/amavis-20160406T150839-32115/parts/part-00001
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda scan: (32115-70) spam_scan: hits=0.002 tests=BSF_SC0_MISMATCH_TO, HTML_MESSAGE
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda scan: (32115-70) Barracuda::Bayes score for user tdefilipps@legalaidbuffalo.org: ISSPAM: 0 Probability: 0 Confidence: 1 Weight: -2.02104990383384
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda scan: (32115-70) $asg_tag = ""
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda scan: (32115-70) pre-Spam level: 0.002
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda scan: (32115-70) post-Spam level: -2.01904990383384 hit_type=0
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda scan: (32115-70) SPAM-TAG, <ejackson@wsnhs.org> -> <tdefilipps@legalaidbuffalo.org>, No, SCORE=-2.02 using per-user scores of TAG_LEVEL=3.5 QUARANTINE_LEVEL=3.5 KILL_LEVEL=7.0 tests=BSF_SC0_MISMATCH_TO, HTML_MESSAGE
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda scan: (32115-70) FWD via SMTP: [127.0.0.1:10025] <ejackson@wsnhs.org> -> <tdefilipps@legalaidbuffalo.org>
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda scan: (32115-70) local delivery: <ejackson@wsnhs.org> -> <tdefilipps@legalaidbuffalo.org>, mbx=/mail/mstore/1459900800/1459970100/1459970204-04bbee161513de40001-EFb1db
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda scan: (32115-70) Passed, <ejackson@wsnhs.org> -> <tdefilipps@legalaidbuffalo.org>, Message-ID: <CALaMx+9SBP+nhrGSZEXf2HRykiVf4D7cbknO7n09o8urtg3aeg@mail.gmail.com>, Hits: 0.002
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda scan: (32115-70) MEMUSAGE END - TOTAL:159156 SHARED:194784
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda scan: (32115-70) TIMING [total elapsed 1642 ms/ cpu 760 ms] - SMTP LHLO: 1(0%)/ 0(0%), SMTP pre-MAIL: 0(0%)/ 0(0%), unlink-0-files: 0(0%)/ 0(0%), create email.txt: 0(0%)/ 0(0%), SMTP pre-DATA-flush: 1(0%)/ 0(0%), SMTP DATA: 39(2%)/ 0(0%), body hash: 1(0%)/ 0(0%), mime_decode_pre: 0(0%)/ 0(0%), mime_decode: 19(1%)/ 20(3%), lookup_sql: 1(0%)/ 0(0%), get-file-type: 144(9%)/ 0(0%), decompose_part: 0(0%)/ 0(0%), decompose_part: 0(0%)/ 0(0%), decompose_part: 0(0%)/ 0(0%), decompose_part: 0(0%)/ 0(0%), decompose_part: 0(0%)/ 0(0%), decompose_part: 0(0%)/ 0(0%), decompose_part: 0(0%)/ 0(0%), parts: 0(0%)/ 0(0%), lookup_sql: 1(0%)/ 0(0%), spsc_strt: 0(0%)/ 0(0%), prep_mime: 3(0%)/ 0(0%), prep_attachment: 0(0%)/ 0(0%), attachment_blk: 1(0%)/ 0(0%), body_bfs: 231(14%)/ 160(21%), SA_pre: 0(0%)/ 0(0%), SA_scan: 891(54%)/ 540(71%), io_cuda_bayes: 1(0%)/ 0(0%), dn_cuda_bayes: 160(10%)/ 40(5%), attachment_quar: 0(0%)/ 0(0%), lookup_sql: 1(0%)/ 0(0%), lookup_sql: 1(0%)/ 0(0%), lookup_s...
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda scan: (32115-70) ...ql: 0(0%)/ 0(0%), lookup_sql: 0(0%)/ 0(0%), lookup_sql: 0(0%)/ 0(0%), fwd-connect: 2(0%)/ 0(0%), fwd-mail-from: 1(0%)/ 0(0%), fwd-rcpt-to: 1(0%)/ 0(0%), write-header: 1(0%)/ 0(0%), fwd-data: 2(0%)/ 0(0%), fwd-data-end: 114(7%)/ 0(0%), fwd-rundown: 0(0%)/ 0(0%), write-header: 1(0%)/ 0(0%), save-to-local-mailbox: 19(1%)/ 0(0%), unlink-7-files: 4(0%)/ 0(0%), rundown: 1(0%)/ 0(0%)
<kbd>/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda inbound/lmtp: EDA8313FA093: to=<tdefilipps@legalaidbuffalo.org>, relay=127.0.0.1[127.0.0.1]:10024, delay=2.7, delays=1/0/0/1.6, dsn=2.6.0, status=sent (250 2.6.0 Ok, id=32115-70, from MTA: 250 2.0.0 Ok: queued as 86607FB82A5)
</kbd>
</pre>
<p>
I have highlighted the very important part which is the: <br><kbd>250 2.0.0 Ok: queued as 86607FB82A5</kbd><br> this is the email being ACCEPTED and QUEUED by our mail scanner <strong>Amavis</strong> which uses port 10024. (Note: if you see errors with 127.0.0.1 (10024), the spam scanner crashed!!)</p>
<p>Now we <kbd>zgrep</kbd> that queuedID and we will see:

</p>

<pre>
[root@10.0.0.200] # zgrep 86607FB82A5 /mail/log/info*
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda outbound/pass2: 86607FB82A5: message-id=<CALaMx+9SBP+nhrGSZEXf2HRykiVf4D7cbknO7n09o8urtg3aeg@mail.gmail.com>
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda outbound/qmgr: 86607FB82A5: from=<ejackson@wsnhs.org>, size=46067, nrcpt=1 (queue active)
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda inbound/lmtp: EDA8313FA093: to=<tdefilipps@legalaidbuffalo.org>, relay=127.0.0.1[127.0.0.1]:10024, delay=2.7, delays=1/0/0/1.6, dsn=2.6.0, status=sent (250 2.6.0 Ok, id=32115-70, from MTA: 250 2.0.0 Ok: queued as 86607FB82A5)
/mail/log/info.2.gz:Apr 06 15:16:46 2016 barracuda outbound/error: 86607FB82A5: to=<tdefilipps@legalaidbuffalo.org>, relay=none, delay=0.25, delays=0.12/0.02/0/0.11, dsn=4.4.2, status=deferred (delivery temporarily suspended: lost connection with 50.75.179.51[50.75.179.51] while sending RCPT TO)
/mail/log/info.2.gz:Apr 06 15:31:32 2016 barracuda outbound/qmgr: 86607FB82A5: from=<ejackson@wsnhs.org>, size=46067, nrcpt=1 (queue active)
/mail/log/info.2.gz:Apr 06 15:31:45 2016 barracuda outbound/error: 86607FB82A5: to=<tdefilipps@legalaidbuffalo.org>, relay=none, delay=899, delays=886/13/0/0.2, dsn=4.4.2, status=deferred (delivery temporarily suspended: lost connection with 50.75.179.51[50.75.179.51] while sending RCPT TO)
/mail/log/info.2.gz:Apr 06 15:51:48 2016 barracuda outbound/qmgr: 86607FB82A5: from=<ejackson@wsnhs.org>, size=46067, nrcpt=1 (queue active)
/mail/log/info.2.gz:Apr 06 15:52:01 2016 barracuda outbound/error: 86607FB82A5: to=<tdefilipps@legalaidbuffalo.org>, relay=none, delay=2115, delays=2102/13/0/0.15, dsn=4.4.2, status=deferred (delivery temporarily suspended: lost connection with 50.75.179.51[50.75.179.51] while sending RCPT TO)
/mail/log/info.2.gz:Apr 06 16:31:47 2016 barracuda outbound/qmgr: 86607FB82A5: from=<ejackson@wsnhs.org>, size=46067, nrcpt=1 (queue active)
/mail/log/info.2.gz:Apr 06 16:31:47 2016 barracuda outbound/error: 86607FB82A5: to=<tdefilipps@legalaidbuffalo.org>, relay=none, delay=4501, delays=4501/0.06/0/0.28, dsn=4.4.2, status=deferred (delivery temporarily suspended: lost connection with 50.75.179.51[50.75.179.51] while sending RCPT TO)
/mail/log/info.2.gz:Apr 06 17:51:32 2016 barracuda outbound/qmgr: 86607FB82A5: from=<ejackson@wsnhs.org>, size=46067, nrcpt=1 (queue active)
/mail/log/info.2.gz:Apr 06 17:51:43 2016 barracuda outbound/error: 86607FB82A5: to=<tdefilipps@legalaidbuffalo.org>, relay=none, delay=9297, delays=9286/10/0/0.41, dsn=4.4.2, status=deferred (delivery temporarily suspended: lost connection with 50.75.179.51[50.75.179.51] while sending RCPT TO)
/mail/log/info.2.gz:Apr 06 20:31:29 2016 barracuda outbound/qmgr: 86607FB82A5: from=<ejackson@wsnhs.org>, size=46067, nrcpt=1 (queue active)
<kbd>/mail/log/info.2.gz:Apr 06 20:31:41 2016 barracuda outbound/smtp: 86607FB82A5: to=<tdefilipps@legalaidbuffalo.org>, relay=50.75.179.51[50.75.179.51]:587, delay=18895, delays=18883/1.3/5.2/5, dsn=4.4.2, status=deferred (host 50.75.179.51[50.75.179.51] said: 421 4.4.2 Message submission rate for this client has exceeded the configured limit (in reply to MAIL FROM command))</kbd>
/mail/log/info.2.gz:Apr 07 00:41:31 2016 barracuda outbound/qmgr: 86607FB82A5: from=<ejackson@wsnhs.org>, size=46067, nrcpt=1 (queue active)
/mail/log/info.2.gz:Apr 07 00:41:32 2016 barracuda outbound/qmgr: 86607FB82A5: skipped, still being delivered
/mail/log/info.2.gz:Apr 07 00:41:41 2016 barracuda outbound/smtp: 86607FB82A5: to=<tdefilipps@legalaidbuffalo.org>, relay=50.75.179.51[50.75.179.51]:587, delay=33895, delays=33885/0.03/5.1/5, dsn=4.4.2, status=deferred (host 50.75.179.51[50.75.179.51] said: 421 4.4.2 Message submission rate for this client has exceeded the configured limit (in reply to MAIL FROM command))
/mail/log/info.2.gz:Apr 07 00:45:18 2016 barracuda outbound/qmgr: 86607FB82A5: from=<ejackson@wsnhs.org>, size=46067, nrcpt=1 (queue active)
/mail/log/info.2.gz:Apr 07 00:45:19 2016 barracuda outbound/smtp: 86607FB82A5: to=<tdefilipps@legalaidbuffalo.org>, relay=50.75.179.51[50.75.179.51]:587, delay=34113, delays=34112/0.03/0.05/0.88, dsn=2.6.0, status=sent (250 2.6.0 <CALaMx+9SBP+nhrGSZEXf2HRykiVf4D7cbknO7n09o8urtg3aeg@mail.gmail.com> [InternalId=15125] Queued mail for delivery)
/mail/log/info.2.gz:Apr 07 00:45:19 2016 barracuda outbound/qmgr: 86607FB82A5: removed
</pre>

<p>and here we finally see all the deferrals he was getting from his mail server! all the way until at 00:45:18 his mail server finally
accepts it and we deliver the message</p>

<h2 class="section-heading">and now you have successfully proven that the problem was that we could not send to their mail server because it was deferring
US.</h2>
		    
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
