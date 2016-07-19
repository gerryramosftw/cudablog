
<?php include("layouts/header.php"); ?>
  <script type="text/javascript" src="nicEdit_test/nicEdit.js"></script> <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
//        new nicEditor().panelInstance('area1');
//        new nicEditor({fullPanel : true}).panelInstance('area2');
//        new nicEditor({fullPanel : true}).panelInstance('area7');
//        new nicEditor({fullPanel : true}).panelInstance('area8');
        new nicEditor({iconsPath : 'nicEdit_test/nicEditorIcons.gif'}).panelInstance('area2');
        new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
        new nicEditor({maxHeight : 100}).panelInstance('area5');
  });
  //]]>

var area1, area2;

function toggleArea1() {
    if(!area1) {
        area1 = new nicEditor({fullPanel : true}).panelInstance('myArea1',{hasPanel : true});
    } else {
        area1.removeInstance('myArea1');
        area1 = null;
    }
}

function addArea2() {
    area2 = new nicEditor({fullPanel : true}).panelInstance('myArea2');
}
function removeArea2() {
    area2.removeInstance('myArea2');
}

bkLib.onDomLoaded(function() { toggleArea1(); });

  </script>

<div style="background:#999">
<div class="container" style="background: #F7F7F7;box-shadow: 0 0 6px #000;">
 <div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <form action="posted2.php" method="post">
        <center><h2>Create your new entry</h2></center>
        <hr />
        <p>Enter Heading:</p>
        <textarea name="header" rows="2" style="width:100%"></textarea>
        <p>Enter Subheading:</p>
        <textarea name="subheading" rows="2" style="width:100%"></textarea>
        <p>Type of post: <br>
        <span class="label label-danger">NEED to select one!</span>
        Exner Post: <input type="radio" name="post_type" value="exner"/>
        Tech Solution: <input type="radio" name="post_type" value="tech_solution"/>
        </p>
        <p>Enter Content:</p>
        <div>
        <textarea name="content" rows="10" cols="80" id="area2" style="width:100%"></textarea>
<!--        <button onClick="addArea2();">Add Editor to TEXTAREA</button> <button onClick="removeArea2();">Remove Editor from TEXTAREA</button>
    -->    </div>
        <p>Select tags:</p>
        <select size="8" name="tagslist[]" id="TagsSelected" multiple="multiple" class="lstSelected">
            <option value="ldap">LDAP</option>
            <option value="spf">SPF</option>
            <option value="inoutq">InOut Queues</option>
            <option value="mysql">MySQL</option>
            <option value="bcas">BCAS</option>
            <option value="bma">BMA</option>
            <option value="besg">BESG/BSF</option>
            <option value="quarantine">Quarantine</option>
            <option value="behavior">Behavior</option>
            <option value="bcc">BCC</option>
        </select>
        <br><br>
       <input type="submit" value="Submit">
       </form>
    </div>
 </div><!-- END ROW -->
</div>
</div>
<?php include("layouts/footer.php"); ?>
