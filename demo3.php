
<?php include("layouts/header.php"); ?>
<html>
<div id="sample">
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
        new nicEditor().panelInstance('area1');
        new nicEditor({fullPanel : true}).panelInstance('area2');
        new nicEditor({iconsPath : 'js/nicEditorIcons.gif'}).panelInstance('area3');
        new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
        new nicEditor({maxHeight : 100}).panelInstance('area5');
  });
  //]]>
  </script>
        <?php
        echo '<form action="formtest.php?user=';
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
<br>
<!--        <p>Tags:<br>
        List of tags are: spf, ldap, mysql, inoutq <br>
        <textarea name="tags" rows="1" cols="80"><?php echo "Put your tags here"; ?></textarea>
        </p>
-->
       <input type="submit" name="submit" value="Submit Post" />
                </div>
        </div>


</html>

<?php include("layouts/footer.php"); ?>
