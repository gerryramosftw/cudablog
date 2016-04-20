<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Second Page</title>
	</head>
	<body>
	 <pre>
	<?php

	 print_r($_GET);
//	 $theid = $_GET['id'];
	 echo $theid;
	?>
	 </pre>
	<?php
	$company = $_GET['company'];
	echo "the company is $company";
	?>


	</body>
</html>
