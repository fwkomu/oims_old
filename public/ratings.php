<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>
<div id="main">
	<div id="navigation">
		&nbsp;
	</div>
	<div id="page">
		<?php echo message(); ?>
		<?php echo form_errors($errors); ?>
		
		<h2>RATINGS/ASSESSMENT</h2>
		<form action="" method = "POST">
			<table width="90%" cellpadding="5">
				<thead>
					<tr>
						<th rowspan="2" colspan="2"><h3>ASSESSMENT AREAS</h3></th>
						<th colspan="5"><h3>RATING SCALE</h3></th>
					</tr>
					<tr>
						<th>Poor</th>
						<th>Below-Average</th>
						<th>Average</th>
						<th>Good</th>
						<th>Excellent</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1.</td><td>Availability of required documentation (5)</td>
						<td align="center"><input type="radio" name="poor" value="1"> </td>
						<td align="center"><input type="radio" name="Below-Average" value="2"> </td>
						<td align="center"><input type="radio" name="Average" value="3"> </td>
						<td align="center"><input type="radio" name="Good" value="4"> </td>
						<td align="center"><input type="radio" name="Excellent" value="5"> </td>
					</tr>
					<tr>
						<td>2.</td><td>Degree of organization of daily entries in internship system (10)</td>
						<td align="center"><input type="radio" name="poor" value="1"> </td>
						<td align="center"><input type="radio" name="Below-Average" value="2"> </td>
						<td align="center"><input type="radio" name="Average" value="3"> </td>
						<td align="center"><input type="radio" name="Good" value="4"> </td>
						<td align="center"><input type="radio" name="Excellent" value="5"> </td>
					</tr>
					<tr>
						<td>3.</td><td>Level of adaptability of attachee in the organization/institution (10)</td>
						<td align="center"><input type="radio" name="poor" value="1"> </td>
						<td align="center"><input type="radio" name="Below-Average" value="2"> </td>
						<td align="center"><input type="radio" name="Average" value="3"> </td>
						<td align="center"><input type="radio" name="Good" value="4"> </td>
						<td align="center"><input type="radio" name="Excellent" value="5"> </td>
					</tr>
					<tr>
						<td>4.</td><td>Ability to work in teams (10)</td>
						<td align="center"><input type="radio" name="poor" value="1"> </td>
						<td align="center"><input type="radio" name="Below-Average" value="2"> </td>
						<td align="center"><input type="radio" name="Average" value="3"> </td>
						<td align="center"><input type="radio" name="Good" value="4"> </td>
						<td align="center"><input type="radio" name="Excellent" value="5"> </td>
					</tr>
					<tr>
						<td>5.</td><td>Accomplishment of assignments  (10)</td>
						<td align="center"><input type="radio" name="poor" value="1"> </td>
						<td align="center"><input type="radio" name="Below-Average" value="2"> </td>
						<td align="center"><input type="radio" name="Average" value="3"> </td>
						<td align="center"><input type="radio" name="Good" value="4"> </td>
						<td align="center"><input type="radio" name="Excellent" value="5"> </td>
					</tr>
					<tr>
						<td>6.</td><td>Presence at designated areas (10)</td>
						<td align="center"><input type="radio" name="poor" value="1"> </td>
						<td align="center"><input type="radio" name="Below-Average" value="2"> </td>
						<td align="center"><input type="radio" name="Average" value="3"> </td>
						<td align="center"><input type="radio" name="Good" value="4"> </td>
						<td align="center"><input type="radio" name="Excellent" value="5"> </td>
					</tr>
					<tr>
						<td>7.</td><td>Communication skills (10)</td>
						<td align="center"><input type="radio" name="poor" value="1"> </td>
						<td align="center"><input type="radio" name="Below-Average" value="2"> </td>
						<td align="center"><input type="radio" name="Average" value="3"> </td>
						<td align="center"><input type="radio" name="Good" value="4"> </td>
						<td align="center"><input type="radio" name="Excellent" value="5"> </td>
					</tr>
					<tr>
						<td>8.</td><td>Mannerism (10)</td>
						<td align="center"><input type="radio" name="poor" value="1"> </td>
						<td align="center"><input type="radio" name="Below-Average" value="2"> </td>
						<td align="center"><input type="radio" name="Average" value="3"> </td>
						<td align="center"><input type="radio" name="Good" value="4"> </td>
						<td align="center"><input type="radio" name="Excellent" value="5"> </td>
					</tr>
					<tr>
						<td>9.</td><td>Student understanding of assignments/tasks given (15)</td>
						<td align="center"><input type="radio" name="poor" value="1"> </td>
						<td align="center"><input type="radio" name="Below-Average" value="2"> </td>
						<td align="center"><input type="radio" name="Average" value="3"> </td>
						<td align="center"><input type="radio" name="Good" value="4"> </td>
						<td align="center"><input type="radio" name="Excellent" value="5"> </td>
					</tr>
					<tr>
						<td>10.</td><td>Oral presentation (10)</td>
						<td align="center"><input type="radio" name="poor" value="1"> </td>
						<td align="center"><input type="radio" name="Below-Average" value="2"> </td>
						<td align="center"><input type="radio" name="Average" value="3"> </td>
						<td align="center"><input type="radio" name="Good" value="4"> </td>
						<td align="center"><input type="radio" name="Excellent" value="5"> </td>
					</tr>
					<tr>
						<td></td><td align="center">TOTAL</td>
					</tr>
				<tbody>
			</table>
		</form>
	</div>
</div>

<?php include("../includes/layouts/footer.php"); ?>