<div id="footer">Copyright <?php echo date("Y")?>, <a href="http://itsphoenix.co.ke" />Phoenix</div>
				
	</body>
</html>
<?php
	//5. Close database connection
	if (isset($connection)) {
		mysqli_close($connection);
	}
?>