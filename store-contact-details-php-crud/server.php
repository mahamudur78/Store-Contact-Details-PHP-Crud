<?php
	/*
	$name = "";
	$address = "";
	$add = "";
	$id = "0";
	$edit_state = false;

	$db = mysqli_connect('localhost', 'root', '','crud');
    //var_dump($_POST);
	if (isset($_POST['save'])){
		$name = $_POST['name'];
		$address = $_POST['address'];
		$add = $_POST['add'];
		var_dump($add);
		if($_POST['name']!=''){
			$query = "INSERT INTO info (name, address, add1) VALUES ('$name','$address', '$add')";
			echo $query;
			mysqli_query($db, $query);
			$result = 'Entry Successful';
			//header('location: index.php');
		}

		else{
			$result = "Please Enter Your Name";
			//header('location: index.php?msg=please+enter+nams');
		}
	}


	

	//Edit data
	/*if (isset($_POST['update'])) {
		$name = mysql_real_escape_string($_POST['name']);
		$address = mysql_real_escape_string($_POST['address']);
		$id = mysql_real_escape_string($_POST['id']);

		mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id" );
		header('location: index.php');

	}*/




/*
	$resultview = mysqli_query($db, "SELECT * FRoM info");

	//Delete data
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM info WHERE id=$id");
		$result = "Delete Confirm";
	}
?>