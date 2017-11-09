<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php find_selected_page(); ?>

<?php 
	// Can't add a new page unless we have a subject as a parent!
	if (!$current_subject) {
		// subject ID was missing or invalid or
		// subject couldn't be found in database
		//redirect_to("manage_content.php");
	}
?>

<?php
	if (isset($_POST['submit'])) {
		//Process the form
		
		// validations
		$required_fields = array("name", "ID", "tel", "email");
		validate_presences($required_fields);
		
		$fields_with_max_lengths = array("name" => 30);
		validate_max_lengths($fields_with_max_lengths);
		
		if (empty($errors)) {
			// Perform Create
			
			// make sure you add the subject_id!
			$username = $current_user["username"];
			$name = mysql_prep($_POST["name"]);
			$gender = mysql_prep($_POST["gender"]);
			$ID = (int) $_POST["ID"];
			$DOB = mysql_prep($_POST["DOB"]);
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
		
			$query = "INSERT INTO profile (";
			$query .= " name, gender, ID, DOB, PA, PC, town, tel, email, kin, Relationship, ktel, School, SPA, SPC, Stown, Stel, Semail, Dept, HOD, CC, Company, CPA, CPC, Ctown, Ctel, Cemail, trainer, position";
			$query .= ") VALUES (";
			$query .= " '{$name}', '{$gender}', {$ID}, {$DOB}, '{$PA}', {$PC}, '{$town}', '{$tel}', '{$email}', '{$kin}', '{$Relationship}', '{$ktel}', '{$School}', '{$SPA}', {$SPC}, '{$Stown}', '{$Stel}', '{$Semail}', '{$Dept}', '{$HOD}', '{$CC}', '{$Company}', '{$CPA}', {$CPC}, '{$Ctown}', '{$Ctel}', '{$Cemail}', '{$trainer}', '{$position}'";
			$query .= ")";
			$result = mysqli_query($connection, $query);
			
			if($result){
				//Success
				$_SESSION["message"] = "Profile created.";
				redirect_to("profile.php");
			} else {
				//Failure
				$_SESSION["message"] = "Profile creation failed";
			}
		}
	} else {
		// This is probably a GET request
		
	} // end: if (isset($_POST['submit']))
?>

<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>
<div id="main">
	<div id="navigation">
		<br />
		<a href="student.php">&laquo; Main menu</a><br />
		<?php echo navigation($current_subject, $current_page); ?>
	</div>
	<div id="page">
		<?php echo message(); ?>
		<?php echo form_errors($errors); ?>
		
		<h2>Create Profile</h2>
		<form action="new_profile.php?user=<?php //echo urlencode($current_user["username"]); ?>" method="POST">
			<h3> A.	PERSONAL DETAILS (ATTACHEE)</h3>
			<p>
				Name: <input type="text" name="name" value="" />
				Gender: 
				Male <input type="radio" name="gender" value="" checked/>
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
			&nbsp;
			&nbsp;
			<input type="submit" name="submit" value="Create Profile" />
			<a href="profile.php">Cancel</a>
		</form>
		<br />
		
	</div>
</div>
<?php include("../includes/layouts/footer.php"); ?>