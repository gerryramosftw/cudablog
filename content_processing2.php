
<?php include("layouts/header.php"); ?>
<?php include("includes/db_connection.php"); ?>
<body style="background:#999">
<div class="container" style="background: #F7F7F7;box-shadow: 0 0 6px #000;">
    <div class="row">
     <div class="col-xs-10 col-xs-offset-1">
     <br><br><br>
     <?php
     global $connection;
     $query="select * from solution_posts where id={$_GET["id"]}";
     echo "The query is: " . $query . "<br>";
     ?>
     </div>
    </div>

</div>
</body>

<?php include ("layouts/footer.php"); ?>

