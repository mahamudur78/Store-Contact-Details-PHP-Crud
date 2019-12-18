<?php 


if (isset($_POST['save'])){
	$name = $email = $phone = $address = $nameerror = $emailerror = $phoneerror = $addresserror = '';
	$vname = $vemail = $vphone = $vaddress = 0;
	//Name Validation  
	if($_SERVER["REQUEST_METHOD"] == 'POST'){
		if (empty($_POST['name'])) {
			$nameerror = 'Name is Required';
			//return false;
			$vname = 0;
		} else{
			$name = check_input_data($_POST['name']);
			if (!preg_match("/^[a-zA-Z ,.]*$/",$name)) {
				$nameerror = 'Only letters and white space allowed';
				//return false;
				$vname = 0;
			}elseif (preg_match("/^[a-zA-Z ,.]*$/",$name)) {
				$vname = 1;
			}
		}

	//Email VAlidation
	if (empty($_POST['email'])) {
		$emailerror = 'Email is Required';
		//return false;
		$vemail = 0;
	} else{
		$email = check_input_data($_POST['email']);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailerror = 'Invalide email format';
			//return false;
			$vemail = 0;
		} elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$vemail = 1;
		}
	}


	//Phone Number VAlidation
	$phone = check_input_data($_POST['phone']);
	$bd_number = str_split($phone);
	//$bd_number_check = $bd_number[0];
	if(empty($_POST['phone'])){
		$phoneerror = 'Phone is Required';
		$vphone = 0;
	}elseif(!is_numeric($phone))  {
		$phoneerror = "Only Number Input";
		$vphone = 0;
	}elseif ((strlen($phone)) ==11) {
		$vphone = 0;
		if($bd_number[0]=='0' && $bd_number[1]=='1' && ($bd_number[2]>2 && $bd_number[2]<=9)){
			$vphone = 1;
		}else{
			$phoneerror = "Invalid Number";
		}


	}else{
		$phoneerror = "Invalid Number";
		//return false;
		$vphone = 0;
	}

$bd_number = str_split($phone);
if($bd_number[0]=='0' && $bd_number[1]=='1' && ($bd_number[2]>2 && $bd_number[2]<=9))
	$vphone = 1;



	//Address VAlidation
	$address = check_input_data($_POST['address']);
	if (empty($_POST['address'])) {
		$addresserror = 'Address is Required';
		//return false;
		$vaddress = 0;
	}else{
		$vaddress = 1;
	}
}


	


		//$name = check_input_data($_POST['name']);
		//$email = check_input_data($_POST['email']);
		//$phone = check_input_data($_POST['phone']);
		//$address = check_input_data($_POST['address']);
		//var_dump($add);
		//if($_POST['name'] == true && $_POST['email'] == true && $_POST['phone'] == true && $_POST['address'] == true){
		if($vname == 1 && $vemail == 1 && $vphone == 1 && $vaddress == 1){
			$query = "INSERT INTO info (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
			//echo $query;
			mysqli_query($db, $query);
			$result = 'Entry Successful';
			$name = '';
			$email = '';
			$phone = '';
			$address = '';
			//header('location: index.php');//
		}elseif($vname == 1 || $vemail == 1 || $vphone == 1 || $vaddress == 1){
			$result = "Please Enter Your correct Information";
		}
		else{
			$result = "Please Enter Your Information";
			//header('location: index.php?msg=please+enter+nams');
		}
}

function check_input_data($data){
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
}
