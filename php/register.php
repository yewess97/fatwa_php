<?php

$name = $_POST['signupName'];
$gender = $_POST['signupGender'];
$birthdate = $_POST['signupBirth'];
$social = $_POST['signupStatus'];
$email = $_POST['signupEmail'];
$password = $_POST['signupPassword'];
$country = $_POST['signupCountry'];
$phone = $_POST['signupPhone'];

//echo $name,$gender,$birthdate,$social,$email,$password,$country,$phone;
require_once('users.php');
require_once('initialize.php');

$result = add_user($name, $gender, $birthdate, $social, $email, $password, $country, $phone);
if ($result == "SUCCESS") {
    redirect_to('index.php');
} else {
    exit($result);

}

?>