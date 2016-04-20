<?php
 //redirecting to a new page

 function redirect_to($new_location){
 header ("Location: ". $new_location);
 exit;
 }


 $logged_in = $_GET['logged_in'];
 if ($logged_in == "1") {
	redirect_to("index.html");
 } else {
	redirect_to("nopass.php");
 }

?>

<html lang="en">
	<head>
		<title>Redirect</title>
	</head>
	<body>

	</body>
</html>

