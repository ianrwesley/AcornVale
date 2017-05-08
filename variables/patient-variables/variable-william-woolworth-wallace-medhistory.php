<?php
$allergies = "Tetracycline, Penicillin, NSAIDs";
$allergiesArray = explode(', ', $allergies);
$reactions = "Black Hairy Tongue, Nausea, Hives";
$reactionsArray = explode(', ', $reactions);
$homemeds = "Tylenol, Benadryl";
$homemedsArray = explode(', ', $homemeds);
$diagnoses = "None";
$diagnosesArray = explode(', ', $diagnoses);

$allergiesReactionsArray = array_merge_recursive($allergiesArray, $reactionsArray)
?>