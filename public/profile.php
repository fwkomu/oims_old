<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php $layout_context = "student"; ?>
<?php include("../includes/layouts/header.php"); ?>

<div id="main">
	<div id="navigation">
		<br />
		<a href="student.php">&laquo; Main menu</a><br />
	</div>
	<div id="page">
		<?php echo message(); ?>
		<?php
			$query = "SELECT * FROM users WHERE username = 'frank';";
			$result = mysqli_query($connection, $query);
			$resultcheck = mysqli_num_rows($result);
			
			if ($resultcheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
		?>
			<h2>Manage Profile</h2>
				<h3> A.	PERSONAL DETAILS (ATTACHEE)</h3>
				Name: <?php //echo htmlentities($row["name"]); ?><br />
				Gender: Male/Female <?php //echo $["gender"] == 1 ? 'Male' : 'Female'; ?><br />
				ID/Passport No: <br />
				Date of Birth: <br />
				Home Postal Address: Postal code: Town: <br />
				Telephone:  Email: <br />
				Next of Kin (Name): <br />
				Relationship: Telephone: <br />
				Postal Address: Postal code: Town:  <br />

				<h3> B.	TRAINING INSTITUTION </h3>
				Name: <br />
				Postal Address: Postal code: Town: <br />
				Telephone: Fax: Email:<br />
				Name of Head of Institution: <br />
				Department: <br />
				Head of Department: <br />
				Course code: <br />

				<h3> C.	DETAILS OF ATTACHMENT PLACE </h3>
				Name of Organization: <br />
				Postal Address: Postal code: Town: <br />
				Telephone: Fax: Email: <br />

				<h3> D.	INDUSTRIAL ATTACHMENT TRAINER </h3>
				Name: <br />
				Position/Designation: <br />
				<br />
				<br />
			<a href="edit_profile.php?page=<?php //echo urlencode($['id']); ?>">Edit Profile</a>
			
		<?php } ?>
   		<?php } ?>
	</div>
</div>
<?php include("../includes/layouts/footer.php"); ?>