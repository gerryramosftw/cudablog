<?php include("layouts/header.php"); ?>
<!DOCTYPE html PUBLIC> 

<html lang="en">
        <head>
                <title>Form</title>
        </head>
        <body style="background: #999">
        <div class="bg-prim container" style="background: #F7F7F7;box-shadow: 0 0 6px #000;">
                <div class="col-xs-offset-1 col-xs-10 bg-prim">
        <?php echo "current user is: " . $_COOKIE["username"]; ?>
        <?php $poster = $_COOKIE["username"]; ?>
        <?php 
        echo '<form action="posted2.php?user=';
        echo $poster;
        echo '" method="post">';
        ?>
        <div style="background:#fff"> <!-- white START -->
        <p>Post Title: <br>
        <textarea name="header" rows="2" cols="80"><?php echo "Enter your heading here" ?></textarea>
        </p>
        <p>Type of post: <br> 
<span class="label label-danger">NEED to select one!</span>        Exner Post: <input type="radio" name="post_type" value="exner"/>
        Tech Solution: <input type="radio" name="post_type" value="tech_solution"/>
        </p>
        <p>Subheading: <br>
        <textarea name="subheading" rows="2" cols="80"><?php echo "Enter your heading here" ?></textarea>
        </p>
        <p>Content:<br />
        <textarea name="content" rows="15" cols="80"><?php echo "This is where you write your post" ?></textarea>
        </p>
        </div> <!-- White END -->
        <p>Tags: </p>

    <div>
        <select name="tagslist[]" id="TagsSelected" multiple="multiple" class="lstSelected">
            <option value="ldap">LDAP</option>
            <option value="spf">SPF</option>
            <option value="inoutq">InOut Queues</option>
            <option value="mysql">MySQL</option>                
        </select>
<!--        <input type="submit" value="submit"> -->
    </div>
<br>
<!--        <p>Tags:<br>
        List of tags are: spf, ldap, mysql, inoutq <br>
        <textarea name="tags" rows="1" cols="80"><?php echo "Put your tags here"; ?></textarea>
        </p>
-->
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  </script>
       <input type="submit" name="submit" value="Submit Post" />
                </div>
        </div>
        </body>
</html>


<?php include("layouts/footer.php"); ?>
