<?php include("layouts/header.php"); ?>
<?php
  // 1. Create a database connection

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "password";
  $dbname = "cudaposts";
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
/*
$query = "select sol_title from solution_posts";
$result = mysqli_query($connection,$query);
if (!$result){
die("Database query has failed.");
}
*/

?>


<!DOCTYPE html PUBLIC>


<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>

	<h1>Page is working properly</h1>
<?php
$query = "select sol_title from solution_posts";
$result = mysqli_query($connection,$query);
if (!$result){
die("Database query has failed.");
}


?>

	<?php
	while ($row = mysqli_fetch_assoc($result)){
	echo $row["sol_title"];	
	echo "<hr />";
	}
	?>
	<?php //mysqli_free_result($result); ?>

<?php $query2="select post from solution_posts order by id desc"; ?>
<?php $result2 = mysqli_query($connection, $query2); ?>
<?php
	for ($i=0;$i<3;$i++){
	$row2 = mysqli_fetch_assoc($result2);
	echo $row2["post"];
	echo "<hr>";
	}
?>
	</body>
</html>


<?php
	//5. Close Connection
	mysqli_close($connection);
?>
