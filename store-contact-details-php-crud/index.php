<?php  
$edit_state = false;
$id = "";
include('db.php');

//Insert
if(isset($_POST['save'])){
	include_once('insert.php');
}

//Edit
if (isset($_GET['edit']) || isset($_POST['update'])) { 
	include_once('edit.php');
}

//Delete
if (isset($_GET['del'])) {
	include('delete.php');
}
$resultview = mysqli_query($db, "SELECT * FRoM info");




		
?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP Project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 class="titel">Store Contact Details (PHP Crud)</h1>
	
	<form method="post" action="index.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo (!isset($name)? '':$name); ?>">
			<span class="error_color">
			<?php
				if(isset($nameerror)>0){

					echo '<label class="error_color">' . $nameerror . '</label>';
				} 
			?>
			</span>

		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo (!isset($email)? '':$email); ?>">
			<?php
				if(isset($emailerror)>0){

					echo '<label class="error_color">' . $emailerror . '</label>';
				} 
			?>
		</div>
		<div class="input-group">
			<label>Phone</label>
			<input type="text" name="phone" value="<?php echo (!isset($phone)? '':$phone); ?>">
			<?php
				if(isset($phoneerror)>0){

					echo '<label class="error_color">' . $phoneerror . '</label>';
				} 
			?>

		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo (!isset($address)? '':$address); ?>">
			<?php
				if(isset($addresserror)>0){

					echo '<label class="error_color">' . $addresserror . '</label>';
				} 
			?>

		</div>
		<div class="input-group">
			<?php if ($edit_state == false): ?>
				<button type="submit" name="save" class="btn">Save</button>
			<?php else: ?>
				<button type="submit" name="update" class="btn">Update</button>
			<?php endif ?>
			
		</div>
	</form>
	
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone No</th>
				<th>Address</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row = mysqli_fetch_array($resultview)) { ?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['phone']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td>
						<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn ">Edit</a>
					</td>
					<td>
						<a href="index.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
					</td>
				</tr>
			<?php } ?>
			


		</tbody>
	</table>

	<?php
	if(isset($result)>0){
		echo '<h3 class="msg" align="center">'.$result.'</h3>';
	} ?>
	
</body>
</html>