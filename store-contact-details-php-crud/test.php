<?php
/*$asif  = "Asif Malik";
if(isset($asif)){
	echo "Alamdanga";
}else{
	echo "Dhaka";
}
echo "<br>";

if(isset($mahamudur)){
	echo "Banasree";
}else{
	echo "Bolorampur";
}*/


/*function validate_phone_number($phone)
{
     // Allow +, - and . in phone number
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        return false;
     } else {
       return true;
     }
}

$phone = "+91-444-444-5555";
if (validate_phone_number($phone) == true) {
   echo "Phone number is valid";
} else {
  echo "Invalid phone number";
}*/




$phone = "01801770704500";
$phoneerror ="";

if(empty($phone)){
		$phoneerror = 'Phone is Required';
}

 $phone = str_split($phone,3);

print_r($phone);

echo "<br>" . $phone[0];

$phone_number_test = $phone[0];

if ( $phone_number_test == "017") {
	$phoneerror = "GP";
}else{
	$phoneerror = "invlide";
}


echo $phoneerror;
var_dump($phoneerror);
echo "<br>";
echo $phone_number_test;
var_dump($phone_number_test);