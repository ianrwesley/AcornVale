<?php
// Drug names
$RXdrugNames = "MOTRIN 800 mg oral tablet, Azithromycin 200 mg/5 ml (oral), Tamiflu 75 mg (oral)";

$RXdosage = "1, 10, 1";
$RXdosageUnit = "tablet, ml, capsule";

$RXfrequency = "every 8 hours, once a day, twice daily";

$RXduration = "3 days, 3 days, 5 days";

$RXcustomSig = "1 tablet, every 8 hours for 3 days--10 ml, once a day for 3 days--1 capsule, twice daily for 5 days";

$RXdispenseAmt = "9 tablets, 30 ml, 10 capsules";

$RXrefills = "1, 0, 2";
$RXsubstitutions = "subs OK, no subs, no subs";

$RXmedEdIncluded = "has-meded, has-meded, none";

// FUNCTIONS
$RXdrugNamesArray = explode(', ', $RXdrugNames);
$RXdosageArray = explode(', ', $RXdosage);
$RXdosageUnitArray = explode(', ', $RXdosageUnit);
$RXfrequencyArray = explode(', ', $RXfrequency);
$RXdurationArray = explode(', ', $RXduration);
$RXcustomSigArray = explode('--', $RXcustomSig);
$RXdispenseAmtArray = explode(', ', $RXdispenseAmt);
$RXrefillsArray = explode(', ', $RXrefills);
$RXsubstitutionsArray = explode(', ', $RXsubstitutions);
$RXmedEdArray = explode(', ', $RXmedEdIncluded);

$RXlastDrug = end($RXdrugNamesArray);
?>