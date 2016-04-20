<?php
  // 1. Create a database connection

  $dbhost = "localhost";
  $dbuser = "widget_cms";
  $dbpass = "password";
  $dbname = "widget_corp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection occurred.
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>

<?php
	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM subjects ";
	$query .= "WHERE visible = 1 ";
//	$query .= "ORDER BY position ASC";
	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if (!$result) {
		die("Database query failed.");
	}
?>


<!DOCTYPE html PUBLIC>


<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>

	<h1>Page is working properly</h1>
		<?php
			// 3. Use returned data (if any)
			while($row = mysqli_fetch_assoc($result)) {
				// output data from each row
				echo "the id is " . $row["id"] . "<br />";
				echo "the menu name is " . $row["menu_name"] . "<br />";
				echo "the position is " . $row["position"] . "<br />";
				echo "the visible is " . $row["visible"] . "<br />";	
				echo "<br>";
				echo "<hr />";
			}
		?>

		<?php
		 // 4. Release returned data
		 mysqli_free_result($result);
		?>
<?php
        // 2. Perform database query
	$vis = 1;
        $query  = "SELECT * ";
        $query .= "FROM pages ";
        $query .= "WHERE visible = $vis ";
//      $query .= "ORDER BY position ASC";
        $result = mysqli_query($connection, $query);
        // Test if there was a query error
        if (!$result) {
                die("Database query failed.");
        }
?>


<?php
	while ($row = mysqli_fetch_assoc($result)){
	 echo "The content of: " . $row["menu_name"] . "is " . $row["content"] . "<br />";
	 echo "<hr />";
	}
?>

<?php
	mysqli_free_result($result);
?>


	</body>
</html>


<?php
	//5. Close Connection
	mysqli_close($connection);
?>
