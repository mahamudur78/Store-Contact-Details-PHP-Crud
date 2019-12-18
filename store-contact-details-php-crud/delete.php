<?php
//Delete data
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM info WHERE id=$id");
		$result = "Delete Confirm";
		header('location: index.php');
	}