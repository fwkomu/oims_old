<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php find_selected_log(); ?>

<?php
	// Unlike new_page.php I don't need a subject_id to be sent
	// I already have it stored in pages.subject_id.
	if (!$current_page) {
		// page ID was missing or invalid or
		// page couldn't be found in database
	//	redirect_to("logs.php");
	}
?>

<?php
	if (isset($_POST['submit'])) {
		//Process the form
		
		$date = mysql_prep($_POST["date"]);
		$entry = mysql_prep($_POST["entry"]);
			
		// validations
		$required_fields = array("date", "entry");
		validate_presences($required_fields);
		
		if (empty($errors)) {
			
			// Perform Update			
			$query = "UPDATE pages SET ";
			$query .= "date = '{$date}', ";
			$query .= "entry = '{$entry}' ";
			$query .= "WHERE id = {$id} ";
			$query .= "LIMIT 1";
			$result = mysqli_query($connection, $query);
			
			if($result && mysqli_affected_rows($connection) >= 0) {
				//Success
				$_SESSION["message"] = "Log updated.";
				redirect_to("manage_content.php?page={$id}");
			} else {
				//Failure
				$message = "Log update failed.";
			}
		}
	} else {
		// This is probably a get request
	} // end: if (isset($_POST['submit']))
?>

<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>

<div id="main">
	<div id="navigation">
		<br />
		<a href="admin.php">&laquo; Main menu</a><br />
		<?php echo navigation($current_subject, $current_page); ?>
	</div>
	<div id="page">
		<?php echo message(); ?>
		<?php echo form_errors($errors); ?>
		
		<h2>Edit Log: <?php echo htmlentities($current_page["menu_name"]); ?></h2>
			<input type="date" name="date" value="" />
		
			<p>
			Notes on work done: <br />
				<textarea name="entry" placeholder="Provide a detailed report of the day's activity" rows="20" cols="80"></textarea>
			</p>
			<input type="submit" name="submit" value="Edit Log" />
		</form>
		<br />
		<a href="logs.php?page=<?php echo urlencode($current_page["id"]); ?>">Cancel</a>
		&nbsp;
		&nbsp;
		<a href="delete_log.php?date=<?php echo urlencode($current_date["id"]); ?>" onclick="return confirm('Are you sure about deleting this?');">Delete</a>
	</div>
</div>
<?php include("../includes/layouts/footer.php"); ?>