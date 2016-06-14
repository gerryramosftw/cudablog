
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
<?php include("layouts/header.php"); ?>

    <div id="main">
      <div id="navigation">
    <!-- Navigation -->
    <br>
    <br>
    <p style="color:#fff">Options</p>
<?php include("layouts/adminsidebar.php"); ?>
    <a href="admin.php">Back to Admin Menu</a>
       </div> <!-- END Admin Sidebar -->
  <div id="page">
        <h2>Create Subject</h2>
        <div> 
        <form action="post_realtime.php" method="post">
          <?php 
            global $connection;
            $query="SELECT * from realtime where id=1";
            $result=mysqli_query($connection,$query);
            $result=mysqli_fetch_assoc($result)
          ?>
          <p>BESS Issues: <br />
            <textarea name="content" rows="2" cols="40"><?php echo $result["rtpost"] ?></textarea>
          </p>
          <?php
            global $connection;
            $query="SELECT * from realtime where id=2";
            $result=mysqli_query($connection,$query);
            $result=mysqli_fetch_assoc($result)
          ?>

          <p>ESG Issues: <br />
            <textarea name="content" rows="2" cols="40"><?php echo $result["rtpost"] ?></textarea>
          </p>

          <?php
            global $connection;
            $query="SELECT * from realtime where id=3";
            $result=mysqli_query($connection,$query);
            $result=mysqli_fetch_assoc($result)
          ?>
          <p>Support Issues: <br />
            <textarea name="content" rows="2" cols="40"><?php echo $result["rtpost"] ?></textarea>
          </p>


          <input type="submit" name="submit" value="Create Subject" />
        </form>
        <br />
        <a href="manage_content.php">Cancel</a>
        </div> <!-- END Form -->
    </div> <!-- END 
<?php
include("layouts/footer.php");
?>
