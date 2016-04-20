<?php
 //redirecting to a new page

 function redirect_to($new_location){
 header ("Location: ". $new_location);
 exit;
 }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Form Processing</title>
	</head>
	<body>
		<pre>
                <?php

		
                 $username = $_POST["username"];
                 $password = $_POST["password"];

                 echo "{$username}: {$password}";

                if ($username == "admin" && $password == "secret") {
                        redirect_to("homep.php");
                } else {
                        redirect_to("nopass.php");
                }


                ?>
<br>


		</pre>
	</body>
</html>

