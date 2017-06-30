<?php
// Demographics
$firstName = "";
$middleName = "";
$lastName = "";

$fullName = "$firstName $middleName $lastName";
$address = "";
$city = "";
$state = "";
$zipCode = "";
$birthday = "";

$gender = "";
$weight = "";
$weightUnit = "";
$weightString = "$weight $weightUnit";

$email = "";
$phone = "";

// Allergies
$allergies = "";
$allergiesDiscontinued = "";
// Allergies - Reactions
$reactions = "";
$reactionsDiscontinued = "";
// Home Meds
$homemeds = "";
$homemedsDiscontinued = "";
// Home Meds - Dosage
$homemedsDose = "";
$homemedsDoseDiscontinued = "";
// Home Meds - Frequency
$homemedsFrequency = "";
$homemedsFrequencyDiscontinued = "";
// Home Meds - Last Taken
$homemedsLastTaken = "";
$homemedsLastTakenDiscontinued = "";
// Diagnoses
$diagnoses = "";
$diagnosesDiscontinued = "";

// Prescriptions
$RXdrugNames = "";
$RXdosage = "";
$RXdosageUnit = "";
$RXfrequency = "";
$RXduration = "";
$RXcustomSig = "";
$RXdispenseAmt = "";
$RXrefills = "";
$RXsubstitutions = "";

//Pharmacy
$selectedPharmacyName = "";
$selectedPharmacyStreet = "";
$selectedPharmacyLocation = "";
$selectedPharmacyPhone = "";
$selectedPharmacyFeatures = "";

// FUNCTIONS
$allergiesArray = explode(', ', $allergies);
$allergiesDiscontinuedArray = explode(', ', $allergiesDiscontinued);
$reactionsArray = explode(', ', $reactions);
$reactionsDiscontinuedArray = explode(', ', $reactionsDiscontinued);
$homemedsArray = explode(', ', $homemeds);
$homemedsDiscontinuedArray = explode(', ', $homemedsDiscontinued);
$homemedsDoseArray = explode(', ', $homemedsDose);
$homemedsDoseDiscontinuedArray = explode(', ', $homemedsDoseDiscontinued);
$homemedsFrequencyArray = explode(', ', $homemedsFrequency);
$homemedsFrequencyDiscontinuedArray = explode(', ', $homemedsFrequencyDiscontinued);
$homemedsLastTakenArray = explode(', ', $homemedsLastTaken);
$homemedsLastTakenDiscontinuedArray = explode(', ', $homemedsLastTakenDiscontinued);
$diagnosesArray = explode(', ', $diagnoses);

$lastAllergy = end($allergiesArray);
$lastReaction = end($reactionsArray);
$lastHomeMed = end($homemedsArray);
$lastDiagnosis = end($diagnosesArray);

// Ordinals
$ordinals = "First, Second, Third, Fourth, Fifth, Sixth, Seventh, Eighth, Ninth, Tenth";
$ordinalsArray = explode(', ', $ordinals);
?>