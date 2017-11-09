<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php retrieve_profile_data(); ?>
<?php find_current_user(); ?>

<?php
	// CODE TO IDENTIFY USER
	// echo htmlentities($_SESSION["username"]);
	//if (!$profile_set) {
		// user ID was missing or invalid or
		// user couldn't be found in database
		//redirect_to("profile.php");
	//}
?>

<?php
	if (isset($_POST['submit'])) {
		//Process the form
		
			$username = $current_user["username"];
			$name = mysql_prep($_POST["name"]);
			$gender = mysql_prep($_POST["gender"]);
			$ID = (int) $_POST["ID"];
			$DOB = (int) $_POST["DOB"];
			$PA = mysql_prep($_POST["PA"]);
			$PC = (int) $_POST["PC"];
			$town = mysql_prep($_POST["town"]);
			$tel = mysql_prep($_POST["tel"]);
			$email = mysql_prep($_POST["email"]);
			$kin = mysql_prep($_POST["kin"]);
			$Relationship = mysql_prep($_POST["Relationship"]);
			$ktel = mysql_prep($_POST["ktel"]);
			$School = mysql_prep($_POST["School"]);
			$SPA = mysql_prep($_POST["SPA"]);
			$SPC = (int) $_POST["SPC"];
			$Stown = mysql_prep($_POST["Stown"]);
			$Stel = mysql_prep($_POST["Stel"]);
			$Semail = mysql_prep($_POST["Semail"]);
			$Dept = mysql_prep($_POST["Dept"]);
			$HOD = mysql_prep($_POST["HOD"]);
			$CC = mysql_prep($_POST["CC"]);
			$Company = mysql_prep($_POST["Company"]);
			$CPA = mysql_prep($_POST["CPA"]);
			$CPC = (int) $_POST["CPC"];
			$Ctown = mysql_prep($_POST["Ctown"]);
			$Ctel = mysql_prep($_POST["Ctel"]);
			$Cemail = mysql_prep($_POST["Cemail"]);
			$trainer = mysql_prep($_POST["trainer"]);
			$position = mysql_prep($_POST["position"]);
			
		// validations
		$required_fields = array("name", "ID", "tel", "email");
		validate_presences($required_fields);
		
		if (empty($errors)) {
			
			// Perform Update			
			$query = "UPDATE profile SET ";
			$query .= "username = '{$username}' ";
			$query .= "name = '{$name}' ";
			$query .= "gender = '{$gender}' ";
			$query .= "ID = {$ID} ";
			$query .= "DOB = '{$DOB}' ";
			$query .= "PA = '{$PA}' ";
			$query .= "PC = {$PC} ";
			$query .= "town = '{$town}' ";
			$query .= "tel = '{$tel}' ";
			$query .= "email = '{$email}' ";
			$query .= "kin = '{$kin}' ";
			$query .= "Relationship = '{$Relationship}' ";
			$query .= "ktel = '{$ktel}' ";
			$query .= "School = '{$School}' ";
			$query .= "SPA = '{$SPA}' ";
			$query .= "SPC = {$SPC} ";
			$query .= "Stown = '{$Stown}' ";
			$query .= "Stel = '{$Stel}' ";
			$query .= "Semail = '{$Semail}' ";
			$query .= "Dept = '{$Dept}' ";
			$query .= "HOD = {$HOD} ";
			$query .= "CC = '{$CC}' ";
			$query .= "Company = '{$Company}' ";
			$query .= "CPA = '{$CPA}' ";
			$query .= "CPC = {$CPC} ";
			$query .= "Ctown = '{$Ctown}' ";
			$query .= "Ctel = '{$Ctel}' ";
			$query .= "Cemail = '{$Cemail}' ";
			$query .= "trainer = '{$trainer}' ";
			$query .= "position = '{$position}' ";
			$query .= "WHERE ID = {$ID} ";
			$query .= "LIMIT 1";
			$result = mysqli_query($connection, $query);
			
			$data = mysqli_fetch_assoc($result);
			
			if($result && mysqli_affected_rows($connection) >= 0) {
				//Success
				$_SESSION["message"] = "Profile updated.";
				redirect_to("profile.php?page={$id}");
			} else {
				//Failure
				$message = "Profile update failed.";
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
		<a href="student.php">&laquo; Main menu</a><br />
	</div>
	<div id="page">
		<?php echo message(); ?>
		<?php echo form_errors($errors); ?>
		<?php 
			$query = "SELECT * FROM users WHERE username = 'frank';";
			$result = mysqli_query($connection, $query);
			$resultcheck = mysqli_num_rows($result);
			
			if ($resultcheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
		?>
		
		<h2>Edit <?php echo htmlentities($_SESSION["username"]); ?>'s Profile:</h2>
		
		<form action="edit_profile.php" method="POST">
			<h3> A.	PERSONAL DETAILS (ATTACHEE)</h3>
			<p>
				Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" />
				Gender: 
				Male <input type="radio" name="gender" value="" />
				Female <input type="radio" name="gender" value="" />
			</p>
			<p>
				ID/Passport No: <input type="text" name="ID" value="" />
				Date of Birth: <input type="date" name="DOB" value="" placeholder="YYYY-MM-DD" />
			</p>
			<p>
				Home Postal Address <input type="text" name="PA" value="" />
				Postal code <input type="text" name="PC" value="" />
				Town <input type="text" name="town" value="" />
			</p>
			<p>
				Telephone: <input type="text" name="tel" value="" />
				Email: <input type="text" name="email" value="" />
			</p>
			<p> 
				Next of Kin(Name): <input type="text" name="kin" value="" />
				Relationship <input type="text" name="Relationship" value="" />
				Telephone <input type="text" name="ktel" value="" />
			</p>

			<h3> B.	TRAINING INSTITUTION </h3>
			<p>	
				Name: <input type="text" name="School" value="" />
				Postal Address: <input type="text" name="SPA" value="" />
				Postal code: <input type="text" name="SPC" value="" />
				Town: <input type="text" name="Stown" value="" />
			</p>
			<p>
				Telephone <input type="text" name="Stel" value="" />
				Email <input type="text" name="Semail" value="" />
			</p>
			<p>Department: <input type="text" name="Dept" value="" />
				Head of Department: <input type="text" name="HOD" value="" />
				Course code: <input type="text" name="CC" value="" />
			</p>

			<h3> C.	DETAILS OF ATTACHMENT PLACE </h3>
			<p>
				Name of Organization: <input type="text" name="Company" value="" />
				Postal Address: <input type="text" name="CPA" value="" />
				Postal code: <input type="text" name="CPC" value="" />
				Town: <input type="text" name="Ctown" value="" />
			</p>
			<p>
				Telephone <input type="text" name="Ctel" value="" />
				Email <input type="text" name="Cemail" value="" />
			</p>

			<h3> D.	INDUSTRIAL ATTACHMENT TRAINER </h3>
			<p>
				Name: <input type="text" name="trainer" value="" />
				Position/Designation: <input type="text" name="position" value="" />
			</p>
			
			<input type="submit" name="submit" value="Edit Profile" />
			&nbsp;
			&nbsp;
		<?php } ?>
		<?php } ?>
			<a href="profile.php">Cancel</a>
		</form>		
	</div>
</div>
<?php include("../includes/layouts/footer.php"); ?>