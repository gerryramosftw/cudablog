



<?php include("layouts/header.php"); ?>
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
        echo '<form action="posted2.php?user=';
        echo $poster;
        echo '" method="post">';
        ?>
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

        <p>Tags with Dropdown: </p>

    <div>
        <select name="tagslist[]" id="TagsSelected" multiple="multiple" class="lstSelected">
            <option value="ldap">LDAP</option>
            <option value="spf">SPF</option>
            <option value="inoutq">InOut Queues</option>
            <option value="mysql">MySQL</option>                
        </select>
<!--        <input type="submit" value="submit"> -->
    </div>

        <p>Tags:<br>
        List of tags are: spf, ldap, mysql, inoutq <br>
        <textarea name="tags" rows="1" cols="80"><?php echo "Put your tags here"; ?></textarea>
        </p>
       <input type="submit" name="submit" value="Submit Post" />
                </div>
        </div>
        </body>
</html>


<?php include("layouts/footer.php"); ?>
