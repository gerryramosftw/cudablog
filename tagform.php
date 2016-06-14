

<!doctype html>

<html>
<form action="formtest.php" method="post">
  First name: <input type="text" name="fname"><br>
  Last name: <input type="text" name="lname"><br>
  <textarea name="header" rows="2" cols="80"><?php echo "Enter your heading here" ?></textarea>
  <input type="submit" value="Submit">
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
        <textarea name="content" rows="15" cols="80" id="area2"><?php echo "This is where you write your post" ?></textarea>
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

</form>
</html>

