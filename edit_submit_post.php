




<?php include("layouts/header.php"); ?>
<!DOCTYPE html PUBLIC> 

<html lang="en">
        <head>
                <title>Form</title>
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
                        <a href="homep.php">Home</a>
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

        <div class="container">
                <div class="jumbotron">
                <form action="posted.php" method="post">
		<p>Post Title: <br>
		<textarea name="header" rows="2" cols="80"><?php echo "Enter your heading here" ?></textarea>
		</p>
		    <p>Content:<br />
        <textarea name="content" rows="15" cols="80"><?php echo "This is where you write your post" ?></textarea>
      </p>
	
       <input type="submit" name="submit" value="Submit Post" />
                </div>
        </div>
        </body>
</html>


<?php include("layouts/footer.php"); ?>
