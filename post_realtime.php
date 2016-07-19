
<?php include("layouts/header.php"); ?>
<?php include("includes/db_connection.php"); ?>

<div style="background:#999">
<div class="container" style="background: #F7F7F7;box-shadow: 0 0 6px #000;">
 <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
        <br><br>
   <pre> 
    <?php
     print_r($_POST);
    ?>
    </pre>

    </div>
 </div><!-- END ROW -->
</div>
</div>

<?php include("layouts/footer.php"); ?>

