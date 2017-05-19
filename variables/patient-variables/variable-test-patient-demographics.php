<?php
date_default_timezone_set('America/New_York');

$firstName = "William";
$middleName = "Woolworth";
$lastName = "Wallace";

$address = "1501 San Christopher Drive";
$city = "Dunedin";
$state = "FL";
$zipCode = "34698";
$birthMonth = "04";
$birthDayUnit = "03";
$birthYear = "1270";

$gender = "Male";
$weight = "184";
$weightUnit = "lbs.";

$email = "williamwallace@freedom.scot";
$phone = "(555) 555-5785";

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