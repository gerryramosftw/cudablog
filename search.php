<?php include("layouts/header.php"); ?>
<?php include("includes/db_connection.php"); ?>

<div class="jumbotron container" style="text-align:center">
    <h1>Enter the search terms below</h1>
</div>

    <div class="container">
        <form action="search_processing.php" method="post">
          Search Terms: <textarea name="search_terms" rows="1" cols="80"><?php echo "Enter your search terms here" ?></textarea>

            <br />
          <input type="submit" name="submit" value="Submit" />
        </form>

    </div>

<?php include ("layouts/footer.php"); ?>
