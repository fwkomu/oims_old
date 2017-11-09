<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php
	$supervisor = find_supervisor_by_id($_GET["id"]);
	if (!$supervisor) {
		// student ID was missing or invalid or
		// student couldn't be found in database
		redirect_to("manage_supervisors.php");
	}
			
			$id = $supervisor["id"];
			$query = "DELETE from users WHERE id = {$id} AND user_role = 'supervisor' LIMIT 1";
			$result = mysqli_query($connection, $query);
			
			if($result && mysqli_affected_rows($connection) == 1) {
				//Success
				$_SESSION["message"] = "Supervisor deleted.";
				redirect_to("manage_supervisors.php");
			} else {
				//Failure
				$_SESSION["message"] = "Supervisor deletion failed.";
				redirect_to("manage_supervisors.php");
			}
			
?>
