<?php
if (isset($_GET['edit'])) { 
	$id = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($db, "SELECT * FROM info WHERE id = $id");
	/*echo "<pre>";
	var_dump($rec);
	echo "</pre>";*/
	$record = mysqli_fetch_array($rec);
	$name = $record['name'];
	$email = $record['email'];
	$phone = $record['phone'];
	$address = $record['address'];
	$id = $record['id'];
	$result = "Please update Address";
} 





if (isset($_POST['update'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$id = $_POST['id'];
		$sql = "UPDATE info SET name = '$name', email = '$email', phone = '$phone', address = '$address' WHERE id ='$id'";
		//echo $sql;
		mysqli_query($db, $sql ); 
		//$_SESSION['message'] = "Address saved"; 
		//header('location: index.php');
		$result = "Edit Confirm";

		//Clear data
		$name = '';
		$email = '';
		$phone = '';
		$address = '';

}