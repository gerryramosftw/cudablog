

<?php
  // Create a database connection

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
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
//        new nicEditor().panelInstance('area1');
//        new nicEditor({fullPanel : true}).panelInstance('area2');
//        new nicEditor({fullPanel : true}).panelInstance('area7');
        new nicEditor({fullPanel : true}).panelInstance('area8');
        new nicEditor({iconsPath : 'js/nicEditorIcons.gif'}).panelInstance('area3');
        new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
        new nicEditor({maxHeight : 100}).panelInstance('area5');
  });
  //]]>
  </script>

<!DOCTYPE html PUBLIC>

<html lang="en">
        <head>
                <title>Form</title>
        </head>
        <body>
        <div class="container">
                <div class="jumbotron">
        <?php echo "current user is: " . $_COOKIE["username"]; ?>
        <?php $poster = $_COOKIE["username"]; ?>
        <?php
        //echo "The post type received was: " . $_GET["post_type"];
        $post_type = $_GET["post_type"];
        $theid = $_GET["id"];
        echo "<pre>";
        echo "Variable theid contains: " . $theid . "<br>";
        echo "Variable post_type contains: " . $post_type;
        echo "</pre>";
        echo '<form action="updatedb.php?user=';
        echo $poster;
        echo "&id=$theid&post_type=$post_type";
        echo '" method="post">';

/*        //1. Define database to be used
        if ($post_type == "tech_solution") {
        $post_type = 2;
        } elseif ($post_type == "exner") {
        $post_type = 1;
        } else {
        echo "Database selection failed, can't pull the data. Yell at gramos or mheller";
        exit;
        }
*/
        ?>
        <!-- Get the original data from the db -->

        <?php
        $query = "select * from solution_posts where id = $theid";
        $thedata = mysqli_query($connection, $query);
        $thedata = mysqli_fetch_assoc($thedata);
        ?>
        <p>Post Title: <br>
        <textarea name="header" rows="2" cols="80"><?php echo $thedata["sol_title"] ?></textarea>
        </p>
<!--        <p>Type of post: <br>
        <span class="label label-danger">NEED to select one!</span>
        Exner Post: <input type="radio" name="post_type" value="exner"/>
        Tech Solution: <input type="radio" name="post_type" value="tech_solution"/>
        </p>
-->        <p>Subheading: <br>
        <textarea name="subheading" rows="2" cols="80"><?php echo $thedata["subheading"] ?></textarea>
        </p>
        <p>Content:<br />
        <textarea name="content" rows="15" id="area8" cols="80"><?php echo $thedata["post"] ?></textarea>
      </p>
<!--        <p>Tags:<br>
        List of tags are: spf, ldap, mysql, inoutq <br>
        <textarea name="tags" rows="1" cols="80"><?php echo $thedata["tags"] ?></textarea>
        </p>
-->
        <select size="8" name="tagslist[]" id="TagsSelected" multiple="multiple" class="lstSelected">
            <option value="ldap">LDAP</option>
            <option value="spf">SPF</option>
            <option value="inoutq">InOut Queues</option>
            <option value="mysql">MySQL</option>
            <option value="bcas">BCAS</option>
            <option value="bma">BMA</option>
            <option value="quarantine">Quarantine</option>
            <option value="behavior">Behavior</option>

        </select>
<br><br>
      <input type="submit" name="submit" value="Submit Post" />
                </div>
        </div>
        </body>
</html>


<?php include("layouts/footer.php"); ?>

