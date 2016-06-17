
<?php include("layouts/header.php"); ?>
<?php include("includes/db_connection.php"); ?>
<body style="background:#999">
<div class="container" style="font-family:'Myriad Pro Light','Myriad Pro', Helvetica;background: #F7F7F7;box-shadow: 0 0 6px #000;">
    <div class="row">
     <div class="col-xs-10 col-xs-offset-1">
     <br>
     <?php
     global $connection;
     $query="select * from solution_posts where id={$_GET["id"]}";
//     echo "The query is: " . $query . "<br>";
     $result = mysqli_query($connection, $query);
     $result = mysqli_fetch_assoc($result);
     echo '<h1 class="text-center">' . $result["sol_title"] . '</h1>';
     echo '<hr style="max-width: 100px;margin: 15px auto;border-width: 4px;border-color:#404040;">';
     echo '<h3 class="text-center">' . $result["subheading"] . '</h3>';
     echo '<br><br>';
     echo $result["post"];
     ?>
        <br />
        <?php
        $form = '<form action="edit_post.php?id=';
        $form .=$_GET["id"];
        $form .='" method="post">';
        echo $form;
        ?>

          <input type="submit" name="edit" value="Edit this post" />
        </form>

        <?php
        $form = '<form action="delete_page.php?id=';
        $form .=$_GET["id"];
        $form .='" method="post">';
        echo $form;
        ?>

          <input type="submit" name="delete" value="Delete this post" />
        </form>
     </div>
    </div>

</div>
</body>

<?php include ("layouts/footer.php"); ?>

