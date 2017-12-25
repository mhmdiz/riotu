<?php
include 'include/dbconfig.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password2'];
//CONFERM
$birth_date = $_POST['birth_date'];
$phone = $_POST['phone'];
$office_phone = $_POST['office_phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$website = $_POST['website'];
$username = $_POST['username'];
$sql = 'UPDATE users SET firstname = "'.$firstname.'" , lastname = "'.$lastname.'" , email = "'.$email.'" , password = "'.$password.'" , birth_date = "'.$birth_date.'" , phone = "'.$phone.'" , office_phone = "'.$office_phone.'" , address = "'.$address.'" , city = "'.$city.'" , country = "'.$country.'" , website = "'.$website.'" WHERE username = "'.$username.'" ';
$result = $dbconn->query($sql);
//echo $result;
?>