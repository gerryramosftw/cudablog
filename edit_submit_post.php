




<?php include("layouts/header.php"); ?>
<!DOCTYPE html PUBLIC> 

<html lang="en">
        <head>
                <title>Form</title>
        </head>
        <body>

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
