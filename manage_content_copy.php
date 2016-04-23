<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("layouts/header.php"); ?>

<?php 
 if (isset($_GET["subject"])){
  $selected_subject_id=$_GET["subject"];
  $selected_page_id = null; 
 } elseif (isset($_GET["page"])){
  $selected_page_id=$_GET["page"];
  $selected_subject_id=null;
 } else {
 $selected_page_id = null;
 $selected_subject_id=null;
 }
?>
<div id="main">
  <div id="navigation">
		<!-- START NAVIGATION -->
		<ul class="subjects">
		<?php $subject_set = find_all_subjects(); ?>

		<?php
		 while($subject = mysqli_fetch_assoc($subject_set)) {
		?>

		<?php subject["menu_name"]; ?>
		<?php echo '<li '; 
		if ($subject["id"] == $selected_subject_id) {
		echo 'class="selected"';
		}
		echo '>'; ?>
	 	 <a href="manage_content.php?subject=<?php echo urlencode($subject["id"]); ?>"><?php echo $subject["menu_name"]; ?></a>

		<?php $page_set = find_pages_for_subject($subject["id"]); ?>
		
		<ul class="pages">
		<?php while($page = mysqli_fetch_assoc($page_set)) { ?>

                <?php echo '<li ';
                if ($page["id"] == $selected_page_id) {
                echo 'class="selected"';
                }
                echo '>'; ?>

		  <a href="manage_content.php?page=<?php echo urlencode($page["id"]); ?>"><?php echo $page["menu_name"] ?></a>
		 </li>
	
		<?php
		 }
		?>
		<?php mysqli_free_result($page_set); ?>
		</ul>
		</li>
		<?php
		 }
		?>

		<?php mysqli_free_result($subject_set); ?>
		</ul>
		<!-- END NAVIGATION -->



  </div>
  <div id="page">
    <h2>Manage Content</h2>
	<?php if ($selected_subject_id) { ?>

	<?php $current_subject = find_subject_by_id($selected_subject_id);?>
	Menu name: <?php echo $current_subject["menu_name"]; ?> <br>
	<?php echo $selected_subject_id; ?>
	
	<?php } elseif ($selected_page_id) { ?><br>
	<?php $current_page = find_page_by_id($selected_page_id); ?>
	<?php echo $current_page["menu_name"]; ?><br>
	<?php echo $selected_page_id; ?>
	<?php } else { ?>
	<p>Please select a subject or a page</p>	
	<?php } ?>  <br>
<?php echo "<h2>Testing if this type of output would work properly</h2>"; ?>
<?php
 echo $subject["menu_name"];
?>


  </div>
</div>
<?php
  // 4. Release returned data
  mysqli_free_result($result);
?>

<?php include("layouts/footer.php"); ?>


