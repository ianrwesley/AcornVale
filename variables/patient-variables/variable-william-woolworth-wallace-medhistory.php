<?php
date_default_timezone_set('America/New_York');
$startDate = strtotime("Now");
$dOne = strtotime("-4 hours", $startDate);
$dTwo = strtotime("-10 hours", $startDate);
$dThree = strtotime("-1 week", $startDate);
$dFour = strtotime("-3 months", $startDate);
$dateOne = date("M d h:i A", $dOne);
$dateTwo = date("M d h:i A", $dTwo);
$dateThree = date("M d h:i A", $dThree);
$dateFour = date("M d h:i A", $dFour);

// Allergies
$allergies = "Tetracycline, Penicillin, NSAIDs";
$allergiesDiscontinued = "Aspirin, Amoxicillin";
// Allergies - Reactions
$reactions = "Hairy Tongue, Nausea, Hives";
$reactionsDiscontinued = "Itchy Skin, Abdominal Pain";
// Home Meds
$homemeds = "Tylenol 500MG Capsule, Benadryl 50MG Tablet";
$homemedsDiscontinued = "Nexium 20MG Capsule, Lyrica 50MG Capsule";
// Home Meds - Dosage
$homemedsDose = "1, 2";
$homemedsDoseUnit = "capsule, tablets";
$homemedsDoseDiscontinued = "1 capsule, 1 capsule";
// Home Meds - Frequency
$homemedsFrequency = "4 times daily, Every 12 hours";
$homemedsFrequencyDiscontinued = "Once daily, 3 times daily";
// Home Meds - Last Taken
$homemedsLastTaken = "$dateOne, $dateTwo";
$homemedsLastTakenDiscontinued = "$dateThree, $dateFour";
// Diagnoses
$diagnoses = "None";
$diagnosesDiscontinued = "";

// FUNCTIONS
$allergiesArray = explode(', ', $allergies);
$allergiesDiscontinuedArray = explode(', ', $allergiesDiscontinued);
$reactionsArray = explode(', ', $reactions);
$reactionsDiscontinuedArray = explode(', ', $reactionsDiscontinued);
$homemedsArray = explode(', ', $homemeds);
$homemedsDiscontinuedArray = explode(', ', $homemedsDiscontinued);
$homemedsDoseArray = explode(', ', $homemedsDose);
$homemedsDoseUnitArray = explode(', ', $homemedsDoseUnit);
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