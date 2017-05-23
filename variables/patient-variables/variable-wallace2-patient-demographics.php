<?php
date_default_timezone_set('America/New_York');

$firstName = "William";
$middleName = "Hamish";
$lastName = "Wallace";

$address = "306 Lagoon Drive";
$city = "Palm Harbor";
$state = "FL";
$zipCode = "34683";
$birthMonth = "04";
$birthDayUnit = "03";
$birthYear = "2006";

$gender = "Male";
$weight = "80";
$weightUnit = "lbs";

$email = "";
$phone = "";

$fullName = "$firstName $middleName $lastName";
$birthday = "$birthMonth/$birthDayUnit/$birthYear";
$birthdayClean = intval($birthMonth) . "/" . intval($birthDayUnit) . "/" . intval($birthYear);
$weightString = "$weight $weightUnit";

$birthDate = explode("/", $birthday);
//get age from date or birthdate
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
	? ((date("Y") - $birthDate[2]) - 1)
	: (date("Y") - $birthDate[2]));
?>