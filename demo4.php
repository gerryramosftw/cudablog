
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

<div style="background:#999">
<div class="container" style="background: #F7F7F7;box-shadow: 0 0 6px #000;">
 <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
        <form action="posted2.php" method="post">
        <center><h2>Create your new entry</h2></center>
        <hr />
        <p>Enter Heading:</p>
        <textarea name="header" rows="2" cols="80"></textarea>
        <p>Enter Subheading:</p>
        <textarea name="subheading" rows="2" cols="80"></textarea>
        <p>Type of post: <br>
        <span class="label label-danger">NEED to select one!</span>
        Exner Post: <input type="radio" name="post_type" value="exner"/>
        Tech Solution: <input type="radio" name="post_type" value="tech_solution"/>
        </p>

        <p>Enter Content:</p>
        <textarea name="content" rows="10" cols="80" id="area8" style="background:white"></textarea>
        <p>Select tags:</p>
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
        <input type="submit" value="Submit">
        </form>
    </div>
 </div><!-- END ROW -->
</div>
</div>
<?php include("layouts/footer.php"); ?>
